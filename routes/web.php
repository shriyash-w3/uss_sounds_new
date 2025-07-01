<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'index'])->name('index');

Route::get('/contact-us', [MainController::class, 'contact'])->name('contact');
    
Route::get('/shop', [MainController::class, 'shop'])->name('shop');

Route::get('/about-us', [MainController::class, 'about'])->name('about');

Route::get('/services', [MainController::class, 'services'])->name('services');

Route::get('/equipment-rental', [MainController::class, 'equipRental'])->name('equipRental');

Route::get('/package-rental', [MainController::class, 'packageRental'])->name('packageRental');