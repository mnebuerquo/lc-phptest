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
    return view('welcome');
});

Route::model('routes', 'Route');
Route::model('stops', 'Stop');
Route::model('locations', 'Location');
 
Route::resource('locations', 'LocationsController');
Route::resource('routes', 'RoutesController');
Route::resource('routes.stops', 'StopsController');
