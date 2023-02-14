<?php

use App\Models\Country;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    $countries = Country::all();
    return Inertia::render('Frontend/Home', [
        'isLogin' => Auth::check(),
        'countries' => $countries
    ]);
})->name('home');