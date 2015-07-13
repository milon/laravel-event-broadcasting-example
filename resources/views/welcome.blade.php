<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel Event Broadcasting Example</title>
    <style>
        body{
            padding: 20px;
        }
    </style>
</head>
<body>
    <h1>Event fired</h1>
    <p id="power">0</p>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdn.socket.io/socket.io-1.3.5.js"></script>
    <script>
        var socket = io('http://localhost:3000');

        socket.on('test-channel:App\\Events\\TestEvent', function(message){
            $('#power').text(parseInt($('#power').text()) + parseInt(message.data.power));
        });
    </script>
</body>
</html>