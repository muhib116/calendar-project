<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index() {}

    public function store(Request $request) {
        $request->validate([
            'title' => 'required|max:50',
            'video' => 'required'
        ]);
        $file = $request->file('video');
        $file_name = $file->hashName();
        $file_path = $file->move('media', $file_name);
        Post::create([
            'user_id' => auth()->id(),
            'title' => $request->title,
            'path' => $file_path,
        ]);
        return redirect()->back()->with('message', 'Post added successfully');
    }

    public function postDelete($id) {
        $post = Post::find($id);
        if ($post) {
            try {
                DB::beginTransaction();
                if ($post->path && file_exists(public_path($post->path))) {
                    unlink(public_path($post->path));
                }
                $post->delete();
                DB::commit();
            } catch (\Throwable $th) {
                DB::rollBack();
            }
            return redirect()->back()->with('message', 'Post deleted successfully');
        }
        return redirect()->back()->with('error', 'Opps! Something wrong');
    }
}
