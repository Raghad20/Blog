<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Post;

class UserPostController extends Controller
{
    public function index()
    {
        $posts = Post::with('category','comments')->latest()->get();
        return view('pages.user.post.index', compact('posts'));
    }
}
