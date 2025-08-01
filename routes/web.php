<?php

use App\Http\Controllers\GitHubController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\GoogleController;

//Google auth
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
//GitHub Auth
Route::get('auth/github', [GitHubController::class,'redirectToGit']);
Route::get('auth/github/callback', [GitHubController::class,'handleGitCallback']);

Route::get('/', function () {
    return view('welcome');
});
