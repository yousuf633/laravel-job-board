<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Post::cursorPaginate(5);
    
        return view('Post.index',['posts'=>$data],["pageTitle"=>"Blog"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('post.create',["pageTitle"=>"create newpost"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       //@TODO:this will be completed in the forms sections
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post=Post::findOrFail($id);
      return view('Post.show',['Post'=>$post],["pageTitle" => $post->title]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
      $post = Post::findOrFail($id);
     return view('Post.edit', ['Post' => $post, "pageTitle" =>  $post->title]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //@TODO:this will be completed in the forms sections
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         //@TODO:this will be completed in the forms sections
    }
}
