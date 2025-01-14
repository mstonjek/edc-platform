<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\MainPage;
use App\Http\Controllers\KitController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;


Route::get('/', MainPage::class);

Route::resource('kits', KitController::class);
Route::resource('products', ProductController::class);
Route::resource('reviews', ReviewController::class);

