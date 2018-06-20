@extends('layouts.web.web')

@section('content')
<div class="myblog">
    <div class="container">
        <h1>Our Blog</h1>
    </div>
</div>
<hr>

<section class="blog-text">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-6">
                <div class="inner" data-aos-easing="linear" data-aos="fade-right" data-aos-duration="1000">
                <h1>{{$post->title}}</h1>
                <img src="{{asset('images/'.$post->image)}}" alt="stool" class="blogimage">
                </div>

            </div>
            <div class="col-12 col-md-12 col-lg-6 second">
                <div class="blog-inner" data-aos-easing="linear" data-aos="fade-left" data-aos-duration="1000">
                    <p>{{$post->body}}</p>
                </div>
            </div>
        </div>
       
        <hr class="myhr">
    </div>
</section>

@endsection