<?php

use App\Http\Controllers\Backend\SettingsController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CountryController;
use App\Http\Controllers\Backend\OccasionController;
use App\Http\Controllers\Backend\TalentController;
use App\Http\Controllers\Backend\UserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware(['auth', 'verified', 'user-role:admin'])->group(function()
{
    Route::get('/admin/dashboard', function () {
        return Inertia::render('Backend/AdminDashboard/Index');
    })->name('admin.dashboard');

    Route::get('/admin/dashboard/analytics', function () {
        return Inertia::render('Backend/AdminDashboard/Analytics');
    })->name('admin.analytics');

    Route::get('/admin/dashboard/payments', function () {
        return Inertia::render('Backend/AdminDashboard/Payments');
    })->name('admin.payments');

    Route::get('/admin/dashboard/talent-applications', [TalentController::class, 'applications'])->name('admin.talent.applications');
    Route::post('/admin/dashboard/approve-talent/{id}', [TalentController::class, 'approve'])->name('talent.approve');


    Route::get('/admin/dashboard/talents', [TalentController::class, 'talents'])->name('admin.talents');
    Route::delete('/admin/dashboard/talents-delete/{id}', [TalentController::class, 'delete'])->name('admin.delete_talent');
    Route::post('/admin/dashboard/talents-restore', [TalentController::class, 'restore'])->name('admin.restore');

    Route::get('/admin/dashboard/talent/{id}', function () {
        return Inertia::render('Backend/AdminDashboard/TalentDetails');
    })->name('admin.talent.detail');

    Route::group(['prefix' => '/admin/dashboard'], function()
    {
        // categories start
        Route::get('/categories', [CategoryController::class, 'index'])->name('admin.categories');
        Route::post('/category', [CategoryController::class, 'store'])->name('admin.category');
        Route::post('/category/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::delete('/category/delete/{id}', [CategoryController::class, 'delete'])->name('admin.category.delete');
        // categories end

        // ocassions start
        Route::get('/ocassions', [OccasionController::class, 'index'])->name('admin.ocassions');
        Route::post('/ocassion', [OccasionController::class, 'store'])->name('admin.ocassion');
        Route::post('/ocassion/{id}', [OccasionController::class, 'edit'])->name('admin.ocassion.edit');
        Route::delete('/ocassion/delete/{id}', [OccasionController::class, 'delete'])->name('admin.ocassion.delete');
        // ocassions end

        // country start
        Route::get('/countries', [CountryController::class, 'index'])->name('admin.countries');
        Route::post('/country', [CountryController::class, 'store'])->name('admin.country');
        Route::post('/country/{id}', [CountryController::class, 'edit'])->name('admin.country.edit');
        Route::delete('/country/delete/{id}', [CountryController::class, 'delete'])->name('admin.country.delete');
        // country end

        // users start
        Route::get('/users', [UserController::class, 'index'])->name('admin.users');
        Route::delete('/delete-user/{user}', [UserController::class, 'soft_delete'])->name('admin.delete_user');
        Route::delete('/restore-user/{user}', [UserController::class, 'restore_user'])->name('admin.restore_user');
    
        Route::get('/user/{id}', function () {
            return Inertia::render('Backend/AdminDashboard/UserDetails');
        })->name('admin.user.detail');
        // users end

        // settings start
        Route::get('/settings', [SettingsController::class, 'index'])->name('admin.settings');
        Route::post('/save-settings', [SettingsController::class, 'saveSettings'])->name('admin.saveSettings');
        Route::post('/save-language', [SettingsController::class, 'saveLanguage'])->name('admin.saveLanguage');
        Route::post('/save-page', [SettingsController::class, 'savepage'])->name('admin.savePage');
        Route::delete('/delete-page/{page}', [SettingsController::class, 'deletepage'])->name('admin.deleted.page');
        // settings end
    });
});