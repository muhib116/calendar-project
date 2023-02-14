<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TalentController extends Controller
{
    public function talents() {
        $talents = User::where([
                'role' => 'talent',
            ])
            ->with(['category', 'country'])
            ->orderBy('id', 'DESC')
            ->get();

        $deletedTalents = User::where([
                'role' => 'talent',
            ])
            ->with(['category', 'country'])
            ->orderBy('id', 'DESC')
            ->onlyTrashed()
            ->get();

        return Inertia::render('Backend/AdminDashboard/Talents', [
            'talents' => $talents,
            'deletedTalents' => $deletedTalents,
        ]);
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
        $talent = User::where(['role', 'talent'])->find($id);
        if($talent) {
            $talent->update([
                'deleted_at' => now(),
                'deleted_by' => auth()->id()
            ]);
        }
    }
    public function restore($id) {
        $talent = User::where(['role', 'talent'])->find($id);
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
