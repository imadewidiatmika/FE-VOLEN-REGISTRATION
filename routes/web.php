<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('registration1');
});

Route::get('/2', function () {
    return view('registration2');
});

Route::get('/3', function () {
    return view('registration3');
});

Route::get('/done', function () {
    return view('done');
});