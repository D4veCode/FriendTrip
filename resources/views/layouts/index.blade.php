@extends('layouts.web.web')

@section('content')

<section class="banner mb-0">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block" src="images/ne.jpg" alt="First slide">

                <div class="carousel-caption d-md-block main-block">
                    <h5>Welcome to the thespacious</h5>
                    <p>a furniture and interiors agency</p>
                    <a href="about.html" class="btn1">
                        ABOUT
                    </a>
                    <a href="#" class="btn2">
                        GO SHOP
                    </a>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block" src="images/newban1.jpg" alt="Second slide">
                <div class="carousel-caption d-md-block">
                    <h5>A Brand for Furniture</h5>
                    <p>a furniture and interiors agency</p>
                    <a href="about.html" class="btn1">
                        ABOUT
                    </a>
                    <a href="#" class="btn2">
                        GO SHOP
                    </a>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block" src="images/banner3.jpg" alt="Third slide">
                <div class="carousel-caption d-md-block">
                    <h5>Get the Best Furniture</h5>
                    <p>a furniture and interiors agency</p>
                    <a href="about.html" class="btn1">
                        ABOUT
                    </a>
                    <a href="#" class="btn2">
                        GO SHOP
                    </a>
                </div>
            </div>

        </div>
        <a class="carousel-control-prev left" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true">

            </span>

        </a>
        <a class="carousel-control-next right" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true">

            </span>

        </a>
    </div>
</section>

<section class="story mt-0">

    <div class="lines">

    </div>

    <div data-aos="fade-right" data-aos-easing="linear" data-aos-duration="500" class="ourstory">
        <div class="inner">
            <h3>OURSTORY</h3>
            <P>Who we are</P>
            <a href="{{route('about')}}">
                READ MORE +
            </a>
        </div>

    </div>


    <div class="ourpara">
        <div data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500" class="inner1">
        <p>{{$about->resume}}</p>
        </div>

    </div>

</section>

<section class="latest">
    <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500" class="lathead">
        <h3>LATEST INTERIOR PRODUCTS ADDED</h3>
        <P>Lorem Ipsum is simply dummy text of the printing and typeset-ting industry. Lorem Ipsum has been the industry's...</P>
    </div>


    <div class="container">
        <div class="row">
            <div data-aos="fade-up" data-aos-duration="500" class="col-12 col-sm-6 col-md-4">
                <div class="lat">
                    <a href="productsingle.html">
                        <figure>
                            <img src="images/img7.jpg" alt="chair">
                        </figure>
                        <span>$45,00</span>
                        <a href="productsingle.html">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </a>
                        <h6 class="text-uppercase">Beautiful corner chair</h6>
                    </a>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="800" class="col-12 col-sm-6 col-md-4">
                <div class="lat">
                    <a href="productsingle.html">
                        <figure>
                            <img src="images/img8.jpg" alt="coffeetable">
                        </figure>
                        <span>$45,00</span>
                        <a href="productsingle.html">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </a>
                        <h6 class="text-uppercase">COFFE TABLE</h6>
                    </a>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1100" class="col-12 col-sm-6 col-md-4">
                <div class="lat">
                    <a href="productsingle.html">
                        <figure>
                            <img src="images/img9.jpg" alt="curtains">
                        </figure>
                        <span>$45,00</span>
                        <a href="productsingle.html">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </a>
                        <h6 class="text-uppercase">Brownish curtains</h6>
                    </a>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="500" class="col-12 col-sm-6 col-md-4">
                <div class="lat">
                    <a href="productsingle.html">
                        <figure>
                            <img src="images/img10.jpg" alt="curtains">
                        </figure>
                        <span>$45,00</span>
                        <a href="productsingle.html">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </a>
                        <h6 class="text-uppercase">Brownish curtains</h6>
                    </a>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="800" class="col-12 col-sm-6 col-md-4">
                <div class="lat">
                    <a href="productsingle.html">
                        <figure>
                            <img src="images/last.png" alt="curtains">
                        </figure>
                        <span>$45,00</span>
                        <a href="productsingle.html">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </a>
                        <h6 class="text-uppercase">Brownish curtains</h6>
                    </a>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1100" class="col-12 col-sm-6 col-md-4">
                <div class="lat">
                    <a href="productsingle.html">
                        <figure>
                            <img src="images/img12.jpg" alt="curtains">
                        </figure>
                        <span>$45,00</span>
                        <a href="productsingle.html">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </a>
                        <h6 class="text-uppercase">Brownish curtains</h6>
                    </a>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="500" class="col-12 col-sm-6 col-md-4">
                <div class="lat">
                    <a href="productsingle.html">
                        <figure>
                            <img src="images/img13.jpg" alt="curtains">
                        </figure>
                        <span>$45,00</span>
                        <a href="productsingle.html">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </a>
                        <h6 class="text-uppercase">Brownish curtains</h6>
                    </a>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="800" class="col-12 col-sm-6 col-md-4">
                <div class="lat">
                    <a href="productsingle.html">
                        <figure>
                            <img src="images/img14.jpg" alt="curtains">
                        </figure>
                        <span>$45,00</span>
                        <a href="productsingle.html">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </a>
                        <h6 class="text-uppercase">Brownish curtains</h6>
                    </a>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1100" class="col-12 col-sm-6 col-md-4">
                <div class="lat">
                    <a href="productsingle.html">
                        <figure>
                            <img src="images/img15.jpg" alt="curtains">
                        </figure>
                        <span>$45,00</span>
                        <a href="productsingle.html">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </a>
                        <h6 class="text-uppercase">Brownish curtains</h6>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <a class="latestbtn" href="#">
        VIEW MORE
    </a>
</section>


<section data-aos="fade-up" data-aos-duration="1000" class="ourblog">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-4">
                <div class="blogtext">
                    <h3>READ OUR BLOG</h3>
                    <p>one of the best and cleaniest wordpress theme for agencies and online portfolios</p>
                    <a class="carousel-control-prev left myleft" href="#carouselExample" role="button" data-slide="prev">
                        <span class="fa fa-angle-left" aria-hidden="true">
                        </span>
                    </a>
                    <a class="carousel-control-next right myright" href="#carouselExample" role="button" data-slide="next">
                        <span class="fa fa-angle-right" aria-hidden="true">
                        </span>
                    </a>
                </div>
            </div>

            <div class="col-12 col-sm-8 lastcarousel">
                <div id="carouselExample" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-6 last">
                                    <a href="blog.html">
                                        <img src="images/img16.jpg" alt="table" class="w-100">
                                    </a>
                                    <p>some of the best furniture designs of the year 1027</p>
                                    <a class="ourblogbtn" href="blog.html">
                                        +more
                                    </a>
                                </div>
                                <div class="col-6 last1">
                                    <a href="blog.html">
                                        <img src="images/img17.jpg" alt="bench" class="w-100">
                                    </a>
                                    <p>some of the best furniture designs of the year 1027</p>
                                    <a class="ourblogbtn" href="blog.html">
                                        +more
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-6 last">
                                    <a href="blog.html">
                                        <img src="images/carousel1.jpg" alt="table" class="w-100">
                                    </a>
                                    <p>some of the best furniture designs of the year 1027</p>
                                    <a class="ourblogbtn" href="blog.html">
                                        +more
                                    </a>
                                </div>
                                <div class="col-6 last1">
                                    <a href="blog.html">
                                        <img src="images/carousel2.jpg" alt="bench" class="w-100">
                                    </a>
                                    <p>some of the best furniture designs of the year 1027</p>
                                    <a class="ourblogbtn" href="blog.html">
                                        +more
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-6 last">
                                    <a href="blog.html">
                                        <img src="images/carousel3.jpg" alt="table" class="w-100">
                                    </a>
                                    <p>some of the best furniture designs of the year 1027</p>
                                    <a class="ourblogbtn" href="blog.html">
                                        +more
                                    </a>
                                </div>

                                <div class="col-6 last1">
                                    <a href="blog.html">
                                        <img src="images/carousel4.jpg" alt="bench" class="w-100">
                                    </a>
                                    <p>some of the best furniture designs of the year 1027</p>
                                    <a class="ourblogbtn" href="blog.html">
                                        +more
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section data-aos="fade-up" data-aos-easing="linear" data-aos-duration="800" class="newsletter">
    <div class="container">
        <div class="nl1">
            <h2 class="text-uppercase">newsletter</h2>
        </div>
        <div class="nl2">
        <form action="{{route('subs.store')}}" method="POST">
                @csrf
                <input type="text" placeholder="Your Name" name="name" required>
                <input type="email" placeholder="Your Email ID" name="email" required>
                <button type="submit">SUBSCRIBE</button>
            </form>
        </div>
    </div>


</section>

@endsection