<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;



Route::get('/dashboard', function () {
    return Inertia::render('Backend/Landing');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/category/{categorySlug}', function () {
    return Inertia::render('Backend/Landing');
})->middleware(['auth', 'verified'])->name('category.items');

Route::get('/details/{slug}', function () {
    return Inertia::render('Backend/ItemDetails');
})->middleware(['auth', 'verified'])->name('item.details');

Route::get('/payment/info', function () {
    return Inertia::render('Backend/Payment/Info');
})->middleware(['auth', 'verified'])->name('payment.info');

Route::get('/payment/gateway', function () {
    return Inertia::render('Backend/Payment/Gateway');
})->middleware(['auth', 'verified'])->name('payment.gateway');
















// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});