<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;
use Illuminate\Support\Facades\Storage;

class HotelController extends Controller
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
        $hotels = Hotel::paginate(9);

        return view('layouts.admin.hotels.index', compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.admin.hotels.create');
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
        $hotel = Hotel::create([
            'price'=>(double)$request->price,
            'name'=>$request->name,
            'location'=>$request->location,
            'room_type'=>$request->room_type,
            'description'=>$request->description,
            'image'=>$file_name

        ]);
        return redirect()->route('hotels.index')->with('success','Hotel agregado.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hotel = Hotel::findOrFail($id);
        return view('layouts.admin.hotels.edit', compact('hotel'));
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
        $hotel = Hotel::findOrFail($id)->update([
            'price'=>(double)$request->price,
            'name'=>$request->name,
            'location'=>$request->location,
            'room_type'=>$request->room_type,
            'description'=>$request->description,
            'image'=>$request->image
        ]);
        return redirect()->route('hotels.index')->with('success','Hotel actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Hotel::destroy($id);
        return redirect()->route('hotels.index')->with('success','Hotel eliminado.');
    }
}
