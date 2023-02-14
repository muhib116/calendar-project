<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
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
        return Inertia::render('Backend/UserDashboard/Account');
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

        if (isset($request->current_password)) {
            $request->validate([
                'password' => 'required|confirmed'
            ]);
            if (Hash::check($request->password, $user->password)) {
                $user->update([
                    'password' => Hash::make($request->password)
                ]);
                return redirect()->back()->with('message', 'Password updated successfully');
            } else {
                return redirect()->back()->withErrors([
                    'password' => "Password doesn't metch"
                ]);
            }
        }
        try {
            DB::beginTransaction();

            $user->username && $data['username'] = $request->username;
            
            $user->save();
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->with('message', 'Opps! Something wrong');
        }
        return redirect()->back()->with('message', 'Update successfully');
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

    public function userDetails(User $user) {
        return Inertia::render('Backend/AdminDashboard/UserDetails', [
            'user' => $user,
        ]);
    }
}
