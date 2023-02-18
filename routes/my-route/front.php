<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;


Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/pages/{slug}', [FrontendController::class, 'pages'])->name('pages');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/categories', [FrontendController::class, 'categories'])->name('categories');
// Route::get('/category/{}')->name('');