<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
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
        $galleries= Gallery::paginate(15);

        return view('layouts.admin.gallery.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.admin.gallery.create');
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
        $photo = Gallery::create([
            'image' => $file_name, 
            'title' => $request->title, 
            'body' => $request->body
        ]);

        return redirect()->route('gallery.index')->with('success', 'Foto agregada');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('layouts.admin.gallery.edit', compact('gallery'));
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
        $photo = Gallery::findOrFail($id)->update([
            'image' => $file_name, 
            'title' => $request->title, 
            'body' => $request->body
        ]);
        return redirect()->route('gallery.index')->with('success', 'Foto actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gallery::destroy($id);
        return redirect()->route('gallery.index')->with('status', 'Foto eliminada');
    }
}
