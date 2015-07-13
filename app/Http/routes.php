<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return 'Go to /fire for firing an event.';
});

Route::get('/fire', function(){
	\Event::fire(new App\Events\TestEvent(1));
	return 'Event fired. Go to /show to observe.';
});

Route::get('/show', function(){
	return view('welcome');
});