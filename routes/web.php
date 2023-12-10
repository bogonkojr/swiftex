<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('website.index');
});

Route::get('portfolio-details', function () {
    return view('website.portfolio-details');
});

Route::get('esomo', function () {
    return view('website.esomo');
});