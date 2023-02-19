<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\TalentEarning; 
use Illuminate\Http\Request;
use Inertia\Inertia;

class TalentEarningController extends Controller
{
    public function wishRequest() {
        $wish = TalentEarning::where('user_id', auth()->id())->where('type', 'wish')->first();
        return Inertia::render('Backend/TalentDashboard/WishRequest', [
            'wish' => $wish
        ]);
    }

    public function saveWishAmount(Request $request) {
        $request->validate([
            'amount' => 'numeric|min:30',
            'status' => 'required',
        ]);

        TalentEarning::updateOrCreate([
            'user_id' => auth()->id()
        ], [
            'amount' => $request->amount,
            'status' => $request->status ? 1 : 0,
            'type' => 'wish',
            'user_id' => auth()->id(),
        ]);

        return redirect()->back()->with('message', 'Wish amount saved successfully');
    }

    public function myLife() {
        $mylife = TalentEarning::where('user_id', auth()->id())->where('type', 'mylife')->first();
        return Inertia::render('Backend/TalentDashboard/MyLife', [
            'mylife' => $mylife
        ]);
    }

    public function saveMylifeAmount(Request $request) {
        $request->validate([
            'amount' => 'numeric|min:50',
            'status' => 'required',
        ]);

        TalentEarning::updateOrCreate([
            'user_id' => auth()->id()
        ], [
            'amount' => $request->amount,
            'status' => $request->status ? 1 : 0,
            'type' => 'mylife',
            'user_id' => auth()->id(),
        ]);

        return redirect()->back()->with('message', 'My life amount saved successfully');
    }

    public function tips() {
        $tips = TalentEarning::where('user_id', auth()->id())->where('type', 'tips')->first();
        return Inertia::render('Backend/TalentDashboard/Tips', [
            'tips' => $tips
        ]);
    }

    public function saveTipsAmount(Request $request) {
        $request->validate([
            'amount' => 'numeric|min:50',
            'status' => 'required',
        ]);

        TalentEarning::updateOrCreate([
            'user_id' => auth()->id()
        ], [
            'amount' => $request->amount,
            'status' => $request->status ? 1 : 0,
            'type' => 'mylife',
            'user_id' => auth()->id(),
        ]);

        return redirect()->back()->with('message', 'My life amount saved successfully');
    }
}
