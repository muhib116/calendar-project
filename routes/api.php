<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Models\Category;
use \App\Models\Country;
use App\Models\Language;
use App\Models\Settings;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/categories', function(){
    $categories = Category::where(['status' => 1])->get();
    return response()->json($categories);
});

Route::get('/countries', function(){
    $countries = Country::where(['status' => 1])->get();
    return response()->json($countries);
});

Route::get('/languages', function(){
    $languages = Language::get();
    return response()->json($languages);
});

Route::get('/settings', function(){
    $settings = Settings::first();
    return response()->json($settings);
});