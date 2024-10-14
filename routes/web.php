<?php

use Illuminate\Support\Facades\Route;

Route::get('/ff', function () {
    return view('ff');
});

Route::get('/mobilelegends', function () {
    return view('mobilelegends');
});
Route::get('/', function () {
    return view('tellgames');
});