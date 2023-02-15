<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

class TalentController extends Controller
{
    public function talents() {
        $talents = User::where([
                'role' => 'talent',
            ])
            ->with(['category', 'country', 'deletedBy'])
            ->orderBy('id', 'DESC')
            ->get();

        $deletedTalents = User::where([
                'role' => 'talent',
            ])
            ->with(['category', 'country', 'deletedBy'])
            ->orderBy('id', 'DESC')
            ->onlyTrashed()
            ->get();

        return Inertia::render('Backend/AdminDashboard/Talents', [
            'talents' => $talents,
            'deletedTalents' => $deletedTalents,
        ]);
    }

    public function account() {
        $user = User::find(auth()->id());
        return Inertia::render('Backend/TalentDashboard/Account', [
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

        if (isset($request->old_password)) {
            $request->validate([
                'old_password' => 'required',
                'password' => 'required|confirmed'
            ]);
            
            if (Hash::check($request->old_password, $user->password)) {
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

        try {
            DB::beginTransaction();

            $user->username && $data['username'] = $request->username;
            $user->first_name && $data['first_name'] = $request->first_name;
            $user->last_name && $data['last_name'] = $request->last_name; 

            $user->save();
            DB::commit();
            return redirect()->back()->with('message', 'Update update successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->with('message', 'Opps! Something wrong');
        }
    }
    public function applications() {
        $talents = User::where([
                'role' => 'talent',
            ])
            ->where('status', '!=', 2)
            ->with(['category'])
            ->orderBy('id', 'DESC')
            ->get();

        $declinedTelent = User::where([
                'role' => 'talent',
                'status' => 2
            ])
            ->with(['category'])
            ->orderBy('id', 'DESC')
            ->get();
        // return $declinedTelent;
        return Inertia::render('Backend/AdminDashboard/TalentApplications', [
            'talents' => $talents,
            'declinedTelent' => $declinedTelent
        ]);
    }

    public function approve(Request $request, $id) {
        $request->validate([
            'status' => 'required'
        ]);
        $talent = User::where('role', 'talent')->find($id);
        if ($talent) {
            if ($request->status == 1) {
                $talent->update([
                    'status' => 1,
                ]);
                return redirect()->back()->with('message', 'Talent Approved Successfully');
            } else {
                $talent->update([
                    'status' => 2,
                ]);
                return redirect()->back()->with('message', 'Talent Declined Successfully');
            }
        }
        return redirect()->back()->with('message', 'Opps! Something wrong');
    }

    public function delete($id) {
        $talent = User::where(['role' => 'talent'])->find($id);
        if($talent) {
            $talent->forceDelete();
            return redirect()->back()->with('message', 'Deleted Successfully');
        }
    }

    public function restore(User $user) {
        $talent = User::where(['role', 'talent'])->find($user->id);
        if($talent) {
            $talent->update([
                'deleted_at' => null,
                'deleted_by' => null
            ]);
        }
    }
    
    public function talentDetails(User $user) {
        return Inertia::render('Backend/AdminDashboard/TalentDetails', [
            'user' => $user
        ]);
    }
}
