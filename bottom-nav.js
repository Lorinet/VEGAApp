var activeItem = 0;
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function()
{
    if (this.readyState == 4)
    {
        if (this.status == 200) 
        {
            document.getElementById("bottom-nav-placeholder").innerHTML = this.responseText;
            document.getElementsByClassName("bottom-nav-button")[activeItem].classList.add("active");
        }
    }
}
function loadNavBar(active)
{
    activeItem = active;
    xhttp.open("GET", "bottom-nav.php", true);
    xhttp.send();
}
