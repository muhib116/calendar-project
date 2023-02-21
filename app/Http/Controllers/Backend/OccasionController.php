<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Occasion;
use Illuminate\Support\Str;
use Inertia\Inertia;


class OccasionController extends Controller
{
    function index(){
        $ocassions = Occasion::orderBy('id', 'desc')->get();
        return Inertia::render('Backend/AdminDashboard/Ocassion', [
            'ocassions' => $ocassions
        ]);
    }

    function store(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:'.Occasion::class],
            'status' => ['required'],
        ]);

        $ocassion = Occasion::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'status' => $request->status,
        ]);

        return redirect()->route('admin.ocassions')->with('message', 'Occasion created successfully!');
    }

    function edit(Request $request, $id){
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:occasions,name,'.$id],
            'status' => ['required'],
        ]);

        $ocassion = Occasion::find($id);
        $ocassion->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'status' => $request->status,
        ]);

        return redirect()->route('admin.ocassions')->with('message', 'Occasion updated successfully!');
    }

    function delete($id){
        Occasion::where('id', $id)->delete();
        return redirect()->route('admin.ocassions')->with('message', 'Occasion deleted successfully!');
    }
}
