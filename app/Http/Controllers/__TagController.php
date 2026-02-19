<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Post;
class TagController extends Controller
{
   function index()
   {
     $data=Tag::all();
     return view('Tag.index',['tags'=>$data],["pageTitle"=>"Tag"]);
   }
   function create()
   {
    $tag=Tag::create(
        [
            'title'=>'CSS'
        ]
    ); 
   
    return redirect('/tags');

   }
   function testManyToMany()
   {
    $post2=Post::find(5);
    $post4=Post::find(6);
    $post2->tags()->attach([1,2]);
    $post4->tags()->attach([1,2]);
    return response()->json(([
         'post5'=> $post2->tags,
         'post6'=>$post4->tags
    ]));

   }
   
}
