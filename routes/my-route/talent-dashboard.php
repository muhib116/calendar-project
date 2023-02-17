<?php

use App\Http\Controllers\Backend\TalentController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;




Route::middleware(['auth', 'user-role:talent'])->group(function(){

    Route::get('/talent/dashboard', function () {
        return Inertia::render('Backend/TalentDashboard/Guide');
    })->name('talent.dashboard');
    
    Route::get('/talent/dashboard/account', [TalentController::class, 'account'])->name('talent.account');
    Route::put('/talent/account/update', [TalentController::class, 'accountUpdate'])->name('talent.account.update');
    
    Route::get('/talent/dashboard/profile/setup', [TalentController::class, 'ProfileSetup'])->name('talent.profile.setup');
    Route::post('/talent/account/update-profile', [TalentController::class, 'profileUpdate'])->name('talent.profile.update');
    
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

