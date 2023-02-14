<?php

use App\Http\Controllers\Backend\TalentController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::middleware(['auth', 'verified', 'user-role:talent'])->group(function(){
    Route::get('/talent/dashboard', function () {
        return Inertia::render('Backend/TalentDashboard/Guide');
    })->name('talent.dashboard');
    
    Route::get('/talent/dashboard/account', [TalentController::class, 'account'])->name('talent.account');
    Route::put('/account-update', [TalentController::class, 'accountUpdate'])->name('user.accountUpdate');
    
    Route::get('/talent/dashboard/profile/setup', function () {
        return Inertia::render('Backend/TalentDashboard/ProfileSetup');
    })->name('talent.profile.setup');
    
    Route::get('/talent/dashboard/tips', function () {
        return Inertia::render('Backend/TalentDashboard/Tips');
    })->name('talent.tips');
    
    Route::get('/talent/dashboard/my-life', function () {
        return Inertia::render('Backend/TalentDashboard/MyLife');
    })->name('talent.myLife');
    
    Route::get('/talent/dashboard/wish-request', function () {
        return Inertia::render('Backend/TalentDashboard/WishRequest');
    })->name('talent.wish.request');
    
    Route::get('/talent/dashboard/analytics', function () {
        return Inertia::render('Backend/TalentDashboard/Analytics');
    })->name('talent.analytics');
    
    Route::get('/talent/dashboard/payout', function () {
        return Inertia::render('Backend/TalentDashboard/Payout');
    })->name('talent.payout');
});

