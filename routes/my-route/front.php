<?php

use App\Models\Country;
use App\Models\Page;
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

Route::get('/pages/{slug}', function ($slug) {
    $pages = Page::where('slug', $slug)->orderBy('id', 'desc')->get();
    return Inertia::render('Frontend/Home', [
        'pages' => $pages
    ]);
})->name('pages');