<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DisplayController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DisplayController::class, 'home'])->name('homepage');

Route::get('/login', [DisplayController::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'login'])->name('login.post');

Route::get('/register', [DisplayController::class, 'register'])->name('register');
Route::post('/register', [AuthManager::class, 'register'])->name('register.post');

Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');

Route::get('/read', [BlogController::class, 'reading'])->name('reading');
Route::post('/read', [BlogController::class, 'createBlog'])->name('create');

Route::get('/edit/{blog}', [BlogController::class, 'editing'])->name('edit');
Route::post('/edit/{blog}', [BlogController::class, 'edit'])->name('edit.post');
