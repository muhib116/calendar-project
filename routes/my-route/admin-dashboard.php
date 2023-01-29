<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/admin/dashboard', function () {
    return Inertia::render('Backend/AdminDashboard/Index');
})->middleware(['auth', 'verified'])->name('admin.dashboard');

Route::get('/admin/dashboard/analytics', function () {
    return Inertia::render('Backend/AdminDashboard/Analytics');
})->middleware(['auth', 'verified'])->name('admin.dashboard.analytics');

Route::get('/admin/dashboard/payments', function () {
    return Inertia::render('Backend/AdminDashboard/Payments');
})->middleware(['auth', 'verified'])->name('admin.dashboard.payments');

Route::get('/admin/dashboard/talent-applications', function () {
    return Inertia::render('Backend/AdminDashboard/TalentApplications');
})->middleware(['auth', 'verified'])->name('admin.dashboard.talent.applications');

Route::get('/admin/dashboard/users', function () {
    return Inertia::render('Backend/AdminDashboard/Users');
})->middleware(['auth', 'verified'])->name('admin.dashboard.users');