<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/welcome', [HomeController::class, 'welcome']);
Route::get('/login',[userController::class, 'showLogin']);
Route::get('/signup',[userController::class, 'showRegister']);
