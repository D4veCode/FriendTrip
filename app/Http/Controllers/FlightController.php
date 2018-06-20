<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Flight;

class FlightController extends Controller
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
        $flights = Flight::paginate(9);

        return view('layouts.admin.flights.index', compact('flights'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.admin.flights.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $flight = Flight::create([
            'num_flight'=> $request->num_flight,
            'airline'=> $request->airline,
            'description'=> $request->description,
            'destination'=> $request->destination,
            'date_dep'=> $request->date_dep,
            'date_des'=> $request->date_des,
            'airline_image'=> $request->airline_image,
            'price'=> (double)$request->price,
        ]);

        return redirect()->route('flights.index')->with('success','Vuelo agregado.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $flight = Flight::findOrFail($id);
        return view('layouts.admin.flights.edit', compact('flight'));
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
        $flight = Flight::findOrFail($id)->update([
            'num_flight'=> $request->num_flight,
            'airline'=> $request->airline,
            'description'=> $request->description,
            'destination'=> $request->destination,
            'date_dep'=> $request->date_dep,
            'date_des'=> $request->date_des,
            'airline_image'=> $request->airline_image,
            'price'=> (double)$request->price,
        ]);
        return redirect()->route('flights.index')->with('success', 'Vuelo editado.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Flight::destroy($id);
        return redirect()->route('flights.index')->with('status', 'Vuelo eliminado');
    }
}
