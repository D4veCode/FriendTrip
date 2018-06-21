@extends('layouts.web.web')

@section('content')
<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="inner" data-aos-easing="linear" data-aos="fade-right" data-aos-duration="1000">
                    <h1>{{$about->title}}</h1>
                     <img src="{{asset('gallery/'.$about->image)}}" id="aboutimg" alt="aboutus">
                
                </div>
            </div>

            <div class="col-12 col-lg-12 second">
                <div class="text" data-aos-easing="linear" data-aos="fade-left" data-aos-duration="1000">
                    <p>{{$about->history}}</p>
                </div>
            </div>
           
        </div>
    </div>

</section>

@endsection