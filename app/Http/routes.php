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
    return view('home');
});
Route::get('home', function () {
    return view('home');
});

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);


Route::get('mail', function () {
    Mail::send('emails.test', ['name' => 'Roman'], function($message)
    {
        $message->from('us@example.com', 'Laravel');
        $message->to('foo@example.com')->cc('bar@example.com');
        //$message->attach('img/cat.jpg');
    });
    return 'Письмо успешно отправлено!';
});