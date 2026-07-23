<?php

use Illuminate\Support\Facades\Route;

// Catch all routes for Vue SPA
Route::get('/{any?}', function () {
    return view('welcome');
})->where('any', '.*');
