<?php

namespace App\Http\Controllers;
use App\Http\Requests\BlogPostRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Gate;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Post::latest()->paginate(5);
    
        return view('Post.index',['posts'=>$data],["pageTitle"=>"Blog"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('post.create',["pageTitle"=>"Blog-Create New Post"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogPostRequest $request)
    {
       $post=new Post();
       $post->title=$request->input('title');
       $post->body=$request->input('body');
       $post->published=$request->has('published');
       $post->user_id=auth()->id();
       $post->save();
       return redirect('/blog')->with('success','Post Created Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
       
      return view('Post.show',['post'=>$post],["pageTitle" => $post->title]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
     return view('Post.edit', ['post' => $post, "pageTitle" =>  $post->title]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogPostRequest $request, Post $post)
    {
        $post->title=$request->input('title');
        $post->body=$request->input('body');
        $post->published=$request->has('published');
        $post->save();
        return redirect('/blog')->with('success','post updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
     $post->delete();
     return redirect('/blog')->with('success','Post deleted successfully!!');

    }
}
