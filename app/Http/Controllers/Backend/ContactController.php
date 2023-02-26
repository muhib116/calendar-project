<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ContactController extends Controller
{
    function index(){
        return Inertia::render('Backend/AdminDashboard/Contact/Index');
    }
}
