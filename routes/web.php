<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.home');
});

Route::get('/contact', 'ContactController@getContact');

Route::post('/contact', 'ContactController@saveContact');

Route::view('/tours', 'pages.tour');

Route::view('/destinations', 'pages.destinations');

Route::view('/tripoffers', 'pages.tripoffers');

Route::view('/destinationdetails', 'pages.destinationdetails');

