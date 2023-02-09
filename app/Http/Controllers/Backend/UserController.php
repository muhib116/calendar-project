<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    function index(){
        $users = User::where('role', 'user')->orderBy('id', 'desc')->get();
        $deletedUsers = User::where('role', 'user')->orderBy('id', 'desc')->onlyTrashed()->get();

        return Inertia::render('Backend/AdminDashboard/Users', [
            'users' => $users,
            'deletedUsers' => $deletedUsers,
        ]);
    }
}
