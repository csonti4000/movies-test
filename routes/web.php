<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('movie/{movie}', [HomeController::class, 'movie'])->name('movie');

Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::post('contact', [HomeController::class, 'contactSave'])->name('contact.save');