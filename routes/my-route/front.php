<?php

use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;


Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/pages/{slug}', [FrontendController::class, 'pages'])->name('pages');

Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::post('/contact/store', [ContactController::class, 'storeContact'])->name('contact.store');

Route::get('/faq', [FrontendController::class, 'faq'])->name('faq');
Route::get('/categories', [FrontendController::class, 'categories'])->name('categories');