<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/admin/dashboard', function () {
    return Inertia::render('Backend/AdminDashboard/Index');
})->middleware(['auth', 'verified'])->name('admin.dashboard');