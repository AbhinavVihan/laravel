<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome and hello');
});

Route::get('/sample', function () {
    return 'Hello, this is a sample route in Laravel!';
});

