<?php

?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 
    </head>
    <body>
        <script src="api.js"></script>
        <script src="bottom-nav.js"></script>
        <script>loadNavBar(0);</script>
        <div id="bottom-nav-placeholder"></div>
        <div class="chat-container" id="chat-container">
            <div class="chat-bubble">Hello!</div><br>
            <div class="chat-bubble">I am VEGA.</div><br>
            <div class="chat-bubble">What can I help you?</div><br>
            <div class="chat-bubble me">hello</div><br>
            <div class="chat-bubble">Hi</div><br>
            <div class="chat-bubble me">fuck off</div><br>
            <div class="chat-bubble me">you are an idiot</div><br>
            <div class="chat-bubble">Hello!</div><br>
            <div class="chat-bubble">I am VEGA.</div><br>
            <div class="chat-bubble">What can I help you?</div><br>
            <div class="chat-bubble me">hello</div><br>
            <div class="chat-bubble">Hi</div><br>
            <div class="chat-bubble me">fuck off</div><br>
            <div class="chat-bubble me">you are an idiot</div><br>
            <div class="chat-bubble">Hello!</div><br>
            <div class="chat-bubble">I am VEGA.</div><br>
            <div class="chat-bubble">What can I help you?</div><br>
            <div class="chat-bubble me">hello</div><br>
            <div class="chat-bubble">Hi</div><br>
            <div class="chat-bubble me">fuck off</div><br>
            <div class="chat-bubble me">you are an idiot</div><br>
            <div class="chat-bubble">Hello!</div><br>
            <div class="chat-bubble">I am VEGA.</div><br>
            <div class="chat-bubble">What can I help you?</div><br>
            <div class="chat-bubble me">hello</div><br>
            <div class="chat-bubble">Hi</div><br>
            <div class="chat-bubble me">fuck off</div><br>
            <div class="chat-bubble me">you are an idiot</div><br>
            <input type="text" class="reply-box" placeholder="Ask VEGA...">
        </div>
        <script>
            document.getElementById("chat-container").scrollTo(0, document.getElementById("chat-container").scrollHeight);
        </script>
    </body>
</html>