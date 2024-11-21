<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // Fetch all records from the 'posts' table
        $posts = composite_prompt::all();

        // Pass data to the view
        return view('posts.index', ['posts' => $posts]);
    }
}

