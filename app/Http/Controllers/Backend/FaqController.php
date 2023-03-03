<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index() {
        
    }

    public function store(Request $request) {
        $request->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);
    }
}
