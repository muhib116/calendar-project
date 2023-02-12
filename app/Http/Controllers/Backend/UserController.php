<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Inertia\Inertia;

class UserController extends Controller
{
    function index(){
        $users = User::where('role', 'user')
                        ->orderBy('id', 'desc')
                        ->get();

        $deletedUsers = User::where('role', 'user')
                            ->with(['deletedBy'])
                            ->orderBy('id', 'desc')
                            ->onlyTrashed()
                            ->get();

        return Inertia::render('Backend/AdminDashboard/Users', [
            'users' => $users,
            'deletedUsers' => $deletedUsers,
        ]);
    }

    public function soft_delete(User $user) {
        $user->update([
            'deleted_by' => auth()->id()
        ]);
        $user->delete();
        return redirect()->back()->with('message', 'User deleted successfully!');
    }
    
    public function restore_user($user) {
        $user = User::onlyTrashed()->find($user);
        $user->update([
            'deleted_by' => null,
        ]);
        $user->restore();
        return redirect()->back()->with('message', 'User restored successfully!');
    }
}
