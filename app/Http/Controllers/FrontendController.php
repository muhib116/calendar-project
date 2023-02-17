<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Country;
use App\Models\Page;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class FrontendController extends Controller
{
    function index(){
        $countries = Country::all();
        $categories = Category::where('status', 1)->with(['talents' => function($q) {
            return $q->where('role', 'talent')->limit(4)->with(['category']);
        }])->get();
        // $relatedTalents = User::whereIn();
        return Inertia::render('Frontend/Home', [
            'countries' => $countries,
            'categories' => $categories,
            'isLogin' => Auth::check()
        ]);
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
