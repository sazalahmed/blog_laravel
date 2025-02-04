<?php

use App\Http\Controllers\dashboard\BlogController;
use App\Http\Controllers\dashboard\DashboardController;
use App\Http\Controllers\website\AboutController;
use App\Http\Controllers\website\BlogDetailsController;
use App\Http\Controllers\website\ContactController;
use App\Http\Controllers\website\HomeController;
use Illuminate\Support\Facades\Route;



// website routing
Route::get('/', [HomeController::class, 'index']);
Route::get('blog-post', [BlogDetailsController::class, 'index']);
Route::get('about', [AboutController::class, 'index']);
Route::get('contact', [ContactController::class, 'index']);


// dashboard routing
Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('admin-dashboard');
Route::get('admin/blogs', [BlogController::class, 'index'])->name('admin-blogs');
