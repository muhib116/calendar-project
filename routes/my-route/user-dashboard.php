<?php

use App\Http\Controllers\Backend\TalentController;
use App\Http\Controllers\Backend\UserController;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;


Route::middleware(['auth', 'verified', 'user-role:user'])->group(function(){
    Route::get('/user/dashboard', function () {
        return Inertia::render('Backend/UserDashboard/Guide', [
            'user' => Auth::user()
        ]);
    })->name('user.dashboard');

    Route::get('/user/dashboard/account', [UserController::class, 'account'])->name('user.account');
    Route::put('user/account/update', [UserController::class, 'accountUpdate'])->name('user.account.update');
    
    Route::get('/user/dashboard/following', [UserController::class, 'userFollowing'])->name('user.following');
    
    Route::get('/user/dashboard/subscription', function () {
        return Inertia::render('Backend/UserDashboard/Subscription');
    })->name('user.subscription');
    
    Route::get('/user/dashboard/history', function () {
        return Inertia::render('Backend/UserDashboard/History');
    })->name('user.history');


    // ------

    Route::get('/category/{categorySlug}', function ($slug) {
        $talents = User::whereHas('category', function($query) use($slug) {
            return $query->where('slug', $slug);
        })->with('category')->get();
        return Inertia::render('Backend/CategoryWiseItem');
    })->name('category.items');
    
    Route::get('/talents/{id}', [TalentController::class, 'talentDetailsForUser'])->name('item.details');
    Route::post('/talents/{id}/follow', [TalentController::class, 'followTalents'])->name('item.followTalents');
    
    Route::get('/payment/info', function () {
        return Inertia::render('Backend/Payment/Info');
    })->name('payment.info');
    
    
    Route::get('/payment/gateway', function () {
        return Inertia::render('Backend/Payment/Gateway');
    })->name('payment.gateway');
    
    Route::get('/payment/tip', function () {
        return Inertia::render('Backend/Payment/Tip');
    })->name('payment.tip');
    
    Route::get('/subscribe', function () {
        return Inertia::render('Backend/Subscribe');
    })->name('subscribe');
});