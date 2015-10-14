<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{   
    public function __construct (){

         $this -> middleware('auth',['only' => ['create','store','edit','update']]);
         $this -> middleware('author',['only' => ['create','store','edit','update']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = \App\Models\Post::all();

        return view('allposts',['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('createPost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\CreatePostRequest $request)
    {
        //

        $post = \App\Models\Post::create($request -> all());

        //dd($request -> all());

        //move file from temp location to images

        $filename = \Carbon\Carbon::now() -> timestamp."_post.jpg";

        $request -> file ('image') -> move('images', $filename);

        $post -> image = $filename;
        $post -> save();

        $labelIDs = $request->get('labels');


        foreach($labelIDs as $labelID){
            $post -> labels() -> attach($labelID); // many to many relationships
        }

        

        return redirect('posts/'.$post -> id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = \App\Models\Post::find($id);

        return view('post',['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $post = \App\Models\Post::find($id);

        $value = $request -> input("value");
        $field = $request -> input("field");

        $post -> $field = $value;
        $post -> save();

        return $value;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
