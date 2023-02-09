<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SettingsController extends Controller
{
    function index(){
        return Inertia::render('Backend/AdminDashboard/Settings/Index');
    }
}
