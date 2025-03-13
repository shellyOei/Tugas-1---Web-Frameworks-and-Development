<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get(function() =>)

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/catalogue', [HomeController::class, 'catalogue'])->name('catalogue');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact-us');

