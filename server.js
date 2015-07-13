//require modules
var express = require('express');
var app     = express();
var http    = require('http').Server(app);
var socket  = require('socket.io')(http);
var Redis   = require('ioredis');
var redis   = new Redis();

//configuration
var port = process.env.PORT || 3000;

//subscribe to test-channel on redis
redis.subscribe('test-channel', function(error, count){});

//message event listener
redis.on('message', function(channel, message){
	console.log('Message received: ' + message);
	message = JSON.parse(message);
	socket.emit(channel + ':' + message.event, message.data);
});

//server listener
http.listen(port, function(){
	console.log('Server running on port: ' + port);
});