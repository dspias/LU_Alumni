@extends('layouts.withnav')

@section('title', '| Home')

@section('stylesheet')
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" href="{{ asset('css/fire-css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fire-css/assets/carousel.css') }}">
@endsection

@section('content')


<section class="header-part">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="welcome-part">
                        <h2>Welcome To</h2>
                        <h1>LU <span style="color: #a3c624;">ALUMNI</span></h1>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex atque impedit aliquid eveniet rem natus? Ut animi voluptates ipsa, illo labore eum dolorem itaque reprehenderit quam saepe totam placeat deleniti?</p>
                        <div class="row">
                            <div class="col-md-12" style="padding-top: 40px;">
                                <button class="btn btn-info btn-outline-info btn-lg btn-outline-custom">See More</button>
                                <button class="btn btn-info btn-lg btn-custom">Contact</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="welcome-image">
                        <img class="img-responsive" src="{{ asset('images/right01.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>    
</section>

<section class="about-part" id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="about-image">
                    <img src="{{asset('images/about_us.png')}}" alt="" class="img-responsive">
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-us">
                    <h2 class="color-one">know <span class="color-two font-bold">About Us</span></h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam qui nesciunt excepturi ullam numquam libero modi ex cupiditate molestiae pariatur molestias veritatis, eum, explicabo quos dolorem et cum repellendus nulla beatae tenetur doloremque vitae architecto voluptatum inventore! Distinctio, itaque commodi?</p>
                    <ul class="social-list">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="latest-news-part">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <h2 class="color-one">here is some <span class="color-two font-bold">Latest News</span></h2>
                </div>
            </div>
        </div>
        <div class="row" style="padding-top: 70px;">
            <div class="col-md-3">
                <div class="newses">
                    <div class="card" style="width: 100%;">
                        <img class="card-img-top" src="{{ asset('images/news.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                          <h4><a href="#" class="news-title">This Is News Title</a></h4>
                          <p class="card-text">Some quick example text to build on the card title...</p>
                          <a class="btn btn-outline-primary btn-custom-details" href="#" role="button">See Details</a>
                        </div>
                      </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="newses">
                    <div class="card" style="width: 100%;">
                        <img class="card-img-top" src="{{ asset('images/news.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                          <h4><a href="#" class="news-title">This Is News Title</a></h4>
                          <p class="card-text">Some quick example text to build on the card title...</p>
                          <a class="btn btn-outline-primary btn-custom-details" href="#" role="button">See Details</a>
                        </div>
                      </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="newses">
                    <div class="card" style="width: 100%;">
                        <img class="card-img-top" src="{{ asset('images/news.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                          <h4><a href="#" class="news-title">This Is News Title</a></h4>
                          <p class="card-text">Some quick example text to build on the card title...</p>
                          <a class="btn btn-outline-primary btn-custom-details" href="#" role="button">See Details</a>
                        </div>
                      </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="newses">
                    <div class="card" style="width: 100%;">
                        <img class="card-img-top" src="{{ asset('images/news.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                          <h4><a href="#" class="news-title">This Is News Title</a></h4>
                          <p class="card-text">Some quick example text to build on the card title...</p>
                          <a class="btn btn-outline-primary btn-custom-details" href="#" role="button">See Details</a>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection

@section('scripts')
   
@endsection


