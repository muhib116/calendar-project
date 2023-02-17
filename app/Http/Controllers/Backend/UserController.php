<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Follower;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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

    public function account() {
        $user = User::find(auth()->id());
        return Inertia::render('Backend/UserDashboard/Account', [
            'user' => $user
        ]);
    }

    public function accountUpdate(Request $request) {
        $user = User::find(auth()->id());

        if (isset($request->deleteUser)) {
            $user->update([
                'deleted_at' => now(),
                'deleted_by' => auth()->id(),
            ]);
            auth()->logout();
            return redirect()->route('home')->with('message', 'Account deleted successfully');
        }

        if ($request->has('current_password')) {
            $request->validate([
                'current_password' => 'required',
                'password' => 'required|confirmed'
            ]);
            // dd($user);
            // dd(Hash::check('password', '$2y$10$Qg6HXFBgr48JN4ivd2R2yuJZrDI7YMK3BbQRvaRJH3kdOUurJi0kK'));
            if (Hash::check($request->password, $user->password)) {
                $user->update([
                    'password' => Hash::make($request->password)
                ]);
                return redirect()->back()->with('message', 'Password updated successfully');
            } else {
                return redirect()->back()->withErrors([
                    'password' => "Password doesn't match"
                ]);
            }
        }
        if($request->has('name')) {
            $request->validate([
                'name' => 'required'
            ]);
            $user->update([
                'name' => $request->name
            ]);
        }

        return redirect()->back()->with('message', 'Data updated successfully');
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

    public function userFollowing() {
        $ids = Follower::where(['user_id' => auth()->id()])->pluck('talent_id');
        $following = User::where(['role' => 'talent'])->with(['category'])->whereIn('id', $ids)->get();
        
        
        return Inertia::render('Backend/UserDashboard/Following', [
            'following' => $following
        ]);
    }

    public function userDetails(User $user) {
        return Inertia::render('Backend/AdminDashboard/UserDetails', [
            'user' => $user,
        ]);
    }
}
