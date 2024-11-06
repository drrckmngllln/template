<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/admission/step-one', function () {
    return view('step-one');
})->name('step-one');

Route::get('/admission/step-two', function () {
    return view('step-two');
})->name('step-two');
