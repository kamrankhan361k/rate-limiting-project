<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::middleware('throttle:5,1')->group(function () {
    Route::get('/limited-access', function () {
        return view('limited');
    });
});