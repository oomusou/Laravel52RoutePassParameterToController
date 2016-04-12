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

use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', [
    'as' => 'Welcome', function () {
        return App::make(HomeController::class)->index('Welcome');
    }
]);

Route::get('/helloworld', [
    'as' => 'HelloWorld', function () {
        return App::make(HomeController::class)->index('HelloWorld');
    }
]);