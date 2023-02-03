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

Route::get('/admin/dashboard/user/{id}', function () {
    return Inertia::render('Backend/AdminDashboard/UserDetails');
})->middleware(['auth', 'verified'])->name('admin.dashboard.user.detail');

Route::get('/admin/dashboard/talents', function () {
    return Inertia::render('Backend/AdminDashboard/Talents');
})->middleware(['auth', 'verified'])->name('admin.dashboard.talents');

Route::get('/admin/dashboard/talent/{id}', function () {
    return Inertia::render('Backend/AdminDashboard/TalentDetails');
})->middleware(['auth', 'verified'])->name('admin.dashboard.talent.detail');

Route::get('/admin/dashboard/categories', function () {
    return Inertia::render('Backend/AdminDashboard/Categories');
})->middleware(['auth', 'verified'])->name('admin.dashboard.categories');

Route::get('/admin/dashboard/countries', function () {
    return Inertia::render('Backend/AdminDashboard/Countries');
})->middleware(['auth', 'verified'])->name('admin.dashboard.countries');