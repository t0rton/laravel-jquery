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

Route::get('/', function() {
	return view('pages.home');
});

Route::get('home', function() {
	return view('pages.home');
});

Route::post('submit', ['uses' => 'UploadFile@save']);

Route::post('save', function() {
	return Response::json(['success'=>true]);
});

Route::get('forms', function () {
	return view('pages.home');
});