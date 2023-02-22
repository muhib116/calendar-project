<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;
use Inertia\Inertia;


class CategoryController extends Controller
{
    function index(){
        $categories = Category::with(['parent'])->orderBy('id', 'desc')->get();
        $parents = Category::where('parent_id', '=', null)->get();
        return Inertia::render('Backend/AdminDashboard/Categories', [
            'categories' => $categories,
            'parents' => $parents
        ]);
    }

    function store(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:'.Category::class],
            'status' => ['required'],
        ]);

        $data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'status' => $request->status
        ];

        if($request->parent_id){
            $data['parent_id'] = $request->parent_id;
        }

        Category::create($data);
        return redirect()->route('admin.categories')->with('message', 'Category created successfully!');
    }

    function edit(Request $request, $id){
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:categories,name,'.$id],
            'status' => ['required'],
        ]);

        $category = Category::find($id);
        $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'status' => $request->status,
            'parent_id' => $request->parent_id,
        ]);

        return redirect()->route('admin.categories')->with('message', 'Category updated successfully!');
    }

    function delete($id){
        Category::where('id', $id)->delete();
        return redirect()->back()->with('message', 'Category deleted successfully!');
    }
}
