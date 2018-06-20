<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;

class PackageController extends Controller
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
        $packages = Package::paginate(9);
        return view('layouts.admin.packages.index', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.admin.packages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $package = Package::create([
            'destination'=>$request->destination, 
            'duration'=>$request->duration, 
            'price'=>(double)$request->price, 
            'capacity'=>$request->capacity, 
            'description'=>$request->description, 
            'date_dep'=>$request->date_dep, 
            'date_des'=>$request->date_des, 
            'image'=>$request->image
        ]);
        return redirect()->route('packages.index')->with('success','Tour agregado.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tour = Package::findOrFail($id);
        return view('layouts.admin.packages.edit', compact('tour'));
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
        $package = Package::findOrFail($id)->update([
            'destination'=>$request->destination, 
            'duration'=>$request->duration, 
            'price'=>(double)$request->price, 
            'capacity'=>$request->capacity, 
            'description'=>$request->description, 
            'date_dep'=>$request->date_dep, 
            'date_des'=>$request->date_des, 
            'image'=>$request->image
        ]);
        return redirect()->route('packages.index')->with('success','Tour actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Package::destroy($id);
        return redirect()->route('packages.index')->with('status','Tour eliminado.');
    }
}
