<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, $post_id)
    {
        $validated=$request->validate([
            'content'=>'required',
        ]);
        Comment::create([
            'content'=>$validated['content'],
            'post_id'=>$post_id,
            'user_id'=>Auth::id(),
        ]);
        return redirect()->back();
    }
}
