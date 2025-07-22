<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;

//Google auth
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::get('/', function () {
    return view('welcome');
});
