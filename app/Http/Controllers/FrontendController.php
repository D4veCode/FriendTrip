<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Flight;
use App\Hotel;
use App\Package;
use App\Post;
use App\About;
use App\Gallery;

class FrontendController extends Controller
{
    public function index(){
        
        $galleries = Gallery::get();
        $about = About::get()->first();
        return view('layouts.index', compact('about'));
    }

    public function flights(){
        $flights = Flight::paginate(9);
        return view('layouts.flights', compact('flights'));
    }

    public function hotels(){
        $hotels = Hotel::paginate(9);
        return view('layouts.hotels', compact('hotels'));
    }

    public function packages(){
        $tours = Package::paginate(9);
        return view('layouts.packages', compact('tours'));
    }

    public function blog(){
        $posts = Post::paginate(9);
        return view('layouts.blog', compact('posts'));
    }
    public function blog_single($id){
        
        $post = Post::findOrFail($id);
        return view('layouts.blog-single', compact('post'));
    }
    public function flight_single($id){
        
        $flight = Flight::findOrFail($id);
        return view('layouts.flight-single', compact('flight'));
    }
    public function tour_single($id){
        
        $tour = Tour::findOrFail($id);
        return view('layouts.tour-single', compact('tour'));
    }
    public function hotel_single($id){
        
        $hotel = Hotel::findOrFail($id);
        return view('layouts.hotel-single', compact('hotel'));
    }
    public function contact(){
        return view('layouts.contact');
    }
    public function about(){
        $about = About::get()->first();
        return view('layouts.about', compact('about'));
    }
}
