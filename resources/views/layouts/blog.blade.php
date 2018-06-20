@extends('layouts.web.web')

@section('content')
<hr>
<section class="blog">
    <div class="container">
        <h1>Our Blog</h1>
        <div class="row one">
            @foreach($posts as $post)
                <div class="col-12 col-sm-6 col-lg-4 two">
                    <div class="bench" data-aos="fade-up" data-aos-duration="500">
                        <a href="{{route('blog_single', $post->id)}}">
                            <img src="images/table.jpg" alt="table">
                            <h5>{{$post->title}}</h5>
                        </a>
                        <a class="buton" href="{{route('blog_single', $post->id)}}">
                            +MORE
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="viewmore">
            <a href="#" class="viewmore">
                VIEW MORE
            </a>
        </div>

    </div>
</section>

@endsection