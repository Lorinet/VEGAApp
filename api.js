var serverSocket;
function connectVega(ip, port)
{
    serverSocket = new WebSocket("ws://" + ip + ":" + port.toString());
    serverSocket.addEventListener('open', function (event) {
        serverSocket.send("lorinet3|@loginpass123");
    });
    
    // Listen for messages
    serverSocket.addEventListener('message', function (event) {
        console.log('Message from server ', event.data);
    });
}