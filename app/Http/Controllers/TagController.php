<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags=Tag::all();
        return view('Tag.index',['pageTitle'=>'Tag index','tags'=>$tags]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tags=Tag::create(
            [
                'title'=>'HTML'
 
    
            ]
        );
        return view('Tag.create',['pageTitle'=>'Tag Created','tags'=>$tags]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //@TODO:this will be completed in the forms sections/
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tags=Tag::find($id);
        return view('Tag.show',['pageTitle'=>'Show Tag', 'tags'=>$tags]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tags=Tag::find($id);
        return view('Tag.edit',['pageTitle'=>'Edit Tag', 'tags'=>$tags]);
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
