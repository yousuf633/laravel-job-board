<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Comment;
class CommentController extends Controller
{
   function index()
   {
     $data=Comment::all();
     return view('Comment.index',['comments'=>$data],["pageTitle"=>"Blog"]);
   }
   function show($id)
   {
      $comment=Comment::findOrFail($id);
      return view('Comment.show',['comments'=>$comment],["pageTitle" => $comment->title]);
   }
   function create()
   {
    /* $comment=Comment::create(
        [
            'author'=>'aouthor comment',
            'contant'=>'This is my conteect for comment for yousuf',
            'post_id'=>4,
        ]
    );
    */
    Comment::factory(5)->create();
   return response(["message=>Successfully Creation","Created Count"=>5],201);

   }
   
}
