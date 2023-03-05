<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\TalentEarning;
use App\Models\User;
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

    public function saveCover(Request $request) {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = $file->hashName();
            $file->move('uploads/cover', $name);
            User::find(auth()->id())->update([
                'cover_image' => 'uploads/cover/'.$name
            ]);
        } else {
            return redirect()->back()->with('error', 'Opps! Something wrong');
        }
    }
    public function saveWishAmount(Request $request) {
        $request->validate([
            'amount' => 'numeric|min:30',
            'status' => 'required',
        ]);

        TalentEarning::updateOrCreate([
            'user_id' => auth()->id(),
            'type' => 'wish',
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
        $posts = Post::where('user_id', auth()->id())->get();
        return Inertia::render('Backend/TalentDashboard/MyLife', [
            'mylife' => $mylife,
            'posts' => $posts
        ]);
    }

    public function saveMylifeAmount(Request $request) {
        $request->validate([
            'amount' => 'numeric|min:50',
            'status' => 'required',
        ]);

        TalentEarning::updateOrCreate([
            'user_id' => auth()->id(),
            'type' => 'mylife',
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
            'status' => 'required',
        ]);

        TalentEarning::updateOrCreate([
            'user_id' => auth()->id(),
            'type' => 'tips',
        ], [
            'amount' => 10,
            'status' => $request->status ? 1 : 0,
            'type' => 'tips',
            'user_id' => auth()->id(),
        ]);

        return redirect()->back()->with('message', 'My life amount saved successfully');
    }
}
