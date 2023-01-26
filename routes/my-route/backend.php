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




Route::get('/account/guid', function () {
    return Inertia::render('Backend/Account/Guid');
})->middleware(['auth', 'verified'])->name('guid');

Route::get('/account/account', function () {
    return Inertia::render('Backend/Account/Account');
})->middleware(['auth', 'verified'])->name('account');

Route::get('/account/following', function () {
    return Inertia::render('Backend/Account/Following');
})->middleware(['auth', 'verified'])->name('following');

Route::get('/account/subscription', function () {
    return Inertia::render('Backend/Account/Subscription');
})->middleware(['auth', 'verified'])->name('subscription');

Route::get('/account/history', function () {
    return Inertia::render('Backend/Account/History');
})->middleware(['auth', 'verified'])->name('history');




Route::get('/mail', function () {
    return Inertia::render('Backend/Mail/Index');
})->middleware(['auth', 'verified'])->name('mail');




Route::get('/account2/guid', function () {
    return Inertia::render('Backend/Account2/Guid');
})->middleware(['auth', 'verified'])->name('account2.guid');

Route::get('/account2/account', function () {
    return Inertia::render('Backend/Account2/Account');
})->middleware(['auth', 'verified'])->name('account2.account');

Route::get('/account2/profile/setup', function () {
    return Inertia::render('Backend/Account2/ProfileSetup');
})->middleware(['auth', 'verified'])->name('account2.profile.setup');

Route::get('/account2/tips', function () {
    return Inertia::render('Backend/Account2/Tips');
})->middleware(['auth', 'verified'])->name('account2.tips');

Route::get('/account2/my-life', function () {
    return Inertia::render('Backend/Account2/MyLife');
})->middleware(['auth', 'verified'])->name('account2.myLife');

Route::get('/account2/wish-request', function () {
    return Inertia::render('Backend/Account2/WishRequest');
})->middleware(['auth', 'verified'])->name('account2.wish.request');

Route::get('/account2/analytics', function () {
    return Inertia::render('Backend/Account2/Analytics');
})->middleware(['auth', 'verified'])->name('account2.analytics');

Route::get('/account2/payout', function () {
    return Inertia::render('Backend/Account2/Payout');
})->middleware(['auth', 'verified'])->name('account2.payout');
















// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});