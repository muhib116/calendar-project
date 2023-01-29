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

Route::get('/payment/tip', function () {
    return Inertia::render('Backend/Payment/Tip');
})->middleware(['auth', 'verified'])->name('payment.tip');

Route::get('/subscribe', function () {
    return Inertia::render('Backend/Subscribe');
})->middleware(['auth', 'verified'])->name('subscribe');




Route::get('/user-dashboard/guide', function () {
    return Inertia::render('Backend/UserDashboard/Guide');
})->middleware(['auth', 'verified'])->name('guide');

Route::get('/user-dashboard/account', function () {
    return Inertia::render('Backend/UserDashboard/Account');
})->middleware(['auth', 'verified'])->name('account');

Route::get('/user-dashboard/following', function () {
    return Inertia::render('Backend/UserDashboard/Following');
})->middleware(['auth', 'verified'])->name('following');

Route::get('/user-dashboard/subscription', function () {
    return Inertia::render('Backend/UserDashboard/Subscription');
})->middleware(['auth', 'verified'])->name('subscription');

Route::get('/user-dashboard/history', function () {
    return Inertia::render('Backend/UserDashboard/History');
})->middleware(['auth', 'verified'])->name('history');




Route::get('/mail', function () {
    return Inertia::render('Backend/Mail/Index');
})->middleware(['auth', 'verified'])->name('mail');



require_once('talent-dashboard.php');
require_once('admin-dashboard.php');

















Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});