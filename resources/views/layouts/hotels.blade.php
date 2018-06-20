@extends('layouts.web.web')

@section('content')
<div class="products">
        <div class="container" data-aos="fade-up" data-aos-duration="500">
            <h1>Our Hotels</h1>
        </div>
</div>
<hr>
<section class="latest our-products">
        <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500" class="lathead">
                <h3>ENJOY OUR CATALOG OF HOTELS!</h3>
                <P>Looking for a week of relax? Or maybe a romantic weekend? Search for all our variety of hotels around the globe!</P>
            </div>
    
    
            <div class="container">
                <div class="row">
                    @foreach($hotels as $hotel)
                    <div data-aos="fade-up" data-aos-duration="500" class="col-12 col-sm-6 col-md-4">
                        <div class="lat">
                            <a href="{{route('flight-single', $hotel->id)}}">
                            <img src="{{asset('images/'.$hotel->image)}}" alt="Chair">
                            </a>
                        <span>{{$hotel->price}}</span>
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            <h5 class="text-uppercase">{{$hotel->name}}</h5>
                            <h6 class="text-uppercase">{{$hotel->location}}</h6>
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