<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/mail', function () {
    return Inertia::render('Backend/Mail/Index');
})->middleware(['auth', 'verified'])->name('mail');



require_once('user-dashboard.php');
require_once('talent-dashboard.php');
require_once('admin.php');

















Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});