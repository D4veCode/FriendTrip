<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(9);
        return view('layouts.admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file_name = "sinimagen.png";
        if($request->file('image')){
            $img = $request->file('image');
            $file_name = $img->getClientOriginalName();
            Storage::disk('gallery')->put(
                $file_name,
                file_get_contents($img->getRealPath())
            );
        }
        $post = Post::create([
            'body'=> $request->body,
            'title'=> $request->title,
            'image'=> $file_name
        ]);
        return redirect()->route('hotels.index')->with('success', 'Post creado');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('layouts.admin.posts.edit', compact('post'));
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
        $file_name = "sinimagen.png";
        if($request->file('image')){
            $img = $request->file('image');
            $file_name = $img->getClientOriginalName();
            Storage::disk('gallery')->put(
                $file_name,
                file_get_contents($img->getRealPath())
            );
        }
        $post = Post::findOrFail($id)->update([
            'body'=> $request->body,
            'title'=> $request->title,
            'image'=> $request->image
        ]);
        return redirect()->route('hotels.index')->with('success', 'Post creado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);

        return redirect()->route('hotels.index')->with('status', 'Post eliminado');
    }
}
