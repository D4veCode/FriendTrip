@extends('layouts.web.web')

@section('content')
<div class="products">
        <div class="container" data-aos="fade-up" data-aos-duration="500">
            <h1>Our Flights</h1>
        </div>
</div>
<hr>
<section class="latest our-products">
        <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500" class="lathead">
            <h3>ENJOY OUR CATALOG OF FLIGHTS</h3>
            <P>We offer you the best deals with airlines from all the globe, just buy one and start traveling!</P>
        </div>


        <div class="container">
            <div class="row">
                @foreach($flights as $flight)
                <div data-aos="fade-up" data-aos-duration="500" class="col-12 col-sm-6 col-md-4">
                    <div class="lat">
                        <a href="{{route('flight-single', $flight->id)}}">
                        <img src="{{asset('images/'.$flight->airline_image)}}" alt="Chair">
                        </a>
                    <span>{{$flight->price}}</span>
                        <a href="productsingle.html">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </a>
                        <h5 class="text-uppercase">{{$flight->destination}}</h5>
                        <h6 class="text-uppercase">{{$flight->airline}}</h6>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <a href="#" class="latestbtn">
            LOAD MORE
        </a>
</section>
@endsection