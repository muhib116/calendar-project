<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/talent-dashboard/guide', function () {
    return Inertia::render('Backend/TalentDashboard/Guide');
})->middleware(['auth', 'verified'])->name('talent-dashboard.guide');

Route::get('/talent-dashboard/account', function () {
    return Inertia::render('Backend/TalentDashboard/Account');
})->middleware(['auth', 'verified'])->name('talent-dashboard.account');

Route::get('/talent-dashboard/profile/setup', function () {
    return Inertia::render('Backend/TalentDashboard/ProfileSetup');
})->middleware(['auth', 'verified'])->name('talent-dashboard.profile.setup');

Route::get('/talent-dashboard/tips', function () {
    return Inertia::render('Backend/TalentDashboard/Tips');
})->middleware(['auth', 'verified'])->name('talent-dashboard.tips');

Route::get('/talent-dashboard/my-life', function () {
    return Inertia::render('Backend/TalentDashboard/MyLife');
})->middleware(['auth', 'verified'])->name('talent-dashboard.myLife');

Route::get('/talent-dashboard/wish-request', function () {
    return Inertia::render('Backend/TalentDashboard/WishRequest');
})->middleware(['auth', 'verified'])->name('talent-dashboard.wish.request');

Route::get('/talent-dashboard/analytics', function () {
    return Inertia::render('Backend/TalentDashboard/Analytics');
})->middleware(['auth', 'verified'])->name('talent-dashboard.analytics');

Route::get('/talent-dashboard/payout', function () {
    return Inertia::render('Backend/TalentDashboard/Payout');
})->middleware(['auth', 'verified'])->name('talent-dashboard.payout');
