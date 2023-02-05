<?php
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return Inertia::render('Frontend/Home', [
        'isLogin' => Auth::check()
    ]);
})->name('home');