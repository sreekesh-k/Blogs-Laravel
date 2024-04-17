<?php

use App\Http\Controllers\AuthManager;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthManager::class, 'home'])->name('homepage');

Route::get('/login', [AuthManager::class, 'login'])->name('login');

Route::get('/register', [AuthManager::class, 'register'])->name('register');

Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');

Route::post('/register', [AuthManager::class, 'RegisterPost'])->name('register.post');
