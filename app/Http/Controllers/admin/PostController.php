<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('category','comments')->latest()->get();
        return view('pages.admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('pages.admin.post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

       $validated= $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'content' => 'required',
           'image'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


if($request->hasFile('image')){
    $image = $request->file('image')->store('public');
 //  $image=Storage::disk('public')->put('images', $request->file('image'));
}
else{
    $image=null;
}

        Post::create([
            'title'=>$validated['title'],
            'content'=>$validated['content'],
            'image'=>$image,
            'category_id'=>$validated['category_id'],
            'user_id'=>Auth::id(),
        ]);
        return redirect()->route('posts.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('pages.admin.post.edit', compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {

        $validated = $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'content' => 'required',

        ]);
        $post->update([
        'title'=>$validated['title'],
        'content'=>$validated['content'],
        'category_id'=>$validated['category_id'],
    ]);
        if($request->image !=null)
        {
            // $image = $request->file('image')->store('public');
            //  $image=Storage::disk('public')->put('images', $request->file('image'));
            $post->update([
                'image'=>$request->file('image')->store('public'),
            ]);
        }
        else{
            $post->update([
                'image'=>null,
            ]);
        }
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
