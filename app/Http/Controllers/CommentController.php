<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $comments=Comment::paginate(10);
      return view('Comment.index',['pageTitle'=>'index Comment']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('comment.create',['pageTitle'=>'Creation Comments']);
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
        $comments=Comment::find($id);
        return view('Comment.show',['pageTitle'=>'Show one Comment','comments'=>$comments]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comments=Comment::find($id);
        return view('Comment.edit',['pageTitle'=>'Edit Post','comments'=>$comments]);
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
