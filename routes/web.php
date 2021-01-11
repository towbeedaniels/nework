<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.home');
});

Route::view('/contact', 'pages.contact');

Route::view('/tours', 'pages.tour');

Route::view('/destinations', 'pages.destinations');

Route::view('/tripoffers', 'pages.tripoffers');

