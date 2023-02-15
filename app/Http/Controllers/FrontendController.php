<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Page;
use Inertia\Inertia;

class FrontendController extends Controller
{
    function index(){
        $countries = Country::all();
        return Inertia::render('Frontend/Home', ['countries' => $countries]);
    }
    function pages($slug){
        $page = Page::where('slug', $slug)->orderBy('id', 'desc')->first();
        return Inertia::render('Frontend/Page', ['page' => $page]);
    }
    function contact(){
        return Inertia::render('Frontend/Contact');
    }
    function categories(){
        return Inertia::render('Frontend/Categories');
    }
}
