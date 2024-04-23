<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PostController extends Controller
{
    // !------DataTables client side 
    public function index()
    {
        // $posts = Post::all(); 
        return view('posts.index'); 
    }
    // !------DataTables server side 
    public function getPost(){
        $posts = Post::all(); 
        return DataTables($posts)->make(false);
    }
    public function create()
    {
        return view('posts.create-post');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
        ]);

        Post::create([
            'title' => $request->title,
            'category' => $request->category,
        ]);

        return redirect()->route('posts.create')->with('success', 'Post created successfully!');
    }

}
