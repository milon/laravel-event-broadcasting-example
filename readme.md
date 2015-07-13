# Laravel 5.1 Event Broadcasting Example

In many modern web applications, web sockets are used to implement real-time, live-updating user interfaces. When some data is updated on the server, a message is typically sent over a websocket connection to be handled by the client.

To assist you in building these types of applications, Laravel makes it easy to "broadcast" your events over a websocket connection. Broadcasting your Laravel events allows you to share the same event names between your server-side code and your client-side JavaScript framework.

By default laravel supports three drivers, Pusher, Redis and a Log driver for debugging. In this example we use redis and nodejs client using socket.io to implement event broadcasting.

## Pre-requisite

+ Laravel 5.1
+ NodeJS installed
+ Redis installed

## Used Packages

### PHP

+ predis/predis: for redis client

### NodeJS

+ express: expressjs framework for routing
+ socket.io: socket.io library for web socket
+ ioredis: ioredis library as redis client

## Installation

At first clone the repository using following command-

```
git clone https://github.com/milon521/laravel-event-broadcasting-example.git
```

Then install php dependency 

```
composer install
```

Then install nodejs dependency with

```
npm install
```

Then run redis server using the following command-

```
redis-server --port 3001
```

Then start nodejs server using-

```
node server.js
```

At last start laravel server 

```
php artisan serve
```

Then visit http://localhost:8000 to view app in browser.

## Contact

For further details, ping at milon521@gmail.com