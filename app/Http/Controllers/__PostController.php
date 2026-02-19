<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{

   function index()
   {
     $data=Post::cursorPaginate(5);
     return view('Post.index',['posts'=>$data],["pageTitle"=>"Blog"]);
   }
   function show($id)
   {
      $post=Post::findOrFail($id);
      return view('Post.show',['Post'=>$post],["pageTitle" => $post->title]);
   }
   function create()
   {
    /* $post=Post::create(
        [
            'title'=>'My first yousuf',
            'body'=>'This is my contact for yousuf',
            'author'=>'Yousef',
            'published'=>true
        ]
    );
    */
    Post::factory(100)->create();
    return response("Successfully creation",200);

  

   }
   function delete($id)
   {
    Post::destroy($id);
    return response("Successfully deleted",200);
   }
   
}
