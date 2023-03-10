<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Country;
use App\Models\Page;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class FrontendController extends Controller
{
    function index(){
        $countries = Country::all();
        $categories_with_talent = Category::where('status', 1)->where('parent_id', '=', null)->with(['talents' => function($q) {
            return $q->where('role', 'talent')->where('status', 1)->limit(4)->with(['category']);
        }])->withCount('talents')->having('talents_count', '>', 0)->get();

        $categories_with_talent =  collect($categories_with_talent)->filter(fn($item) => count($item->talents) > 0);
        
        $categories_with_child = Category::where('status', 1)->where('parent_id', '=', null)->with('child')->get();
        return Inertia::render('Frontend/Home', [
            'countries' => $countries,
            'categories_with_talent' => $categories_with_talent,
            'categories_with_child' => $categories_with_child,
            'isLogin' => Auth::check()
        ]);
    }

    function pages($slug){
        $page = Page::where('slug', $slug)->orderBy('id', 'desc')->first();
        return Inertia::render('Frontend/Page', [
            'isLogin' => Auth::check(),
            'page' => $page
        ]);
    }
    function contact(){
        return Inertia::render('Frontend/Contact');
    }
    function faq(){
        return Inertia::render('Frontend/FAQ');
    }
    function categories(){
        return Inertia::render('Frontend/Categories');
    }
}
