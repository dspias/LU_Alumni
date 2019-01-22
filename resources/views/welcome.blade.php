@extends('layouts.withnav')

@section('title', '| Home')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <style>
        
    /*===================< Header Part Starts >==============*/
    .header-part{
        height: 668px;
        background-image: url('../images/background.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        /* background-position: center; */
    }
    .overlay{
        background-color: #000000a5;
        height: 668px;
    }
    .welcome-part{
        margin-top: 170px;
        padding: 20px 50px;
        font-family: 'Kurale', serif;
    }
    .welcome-part h2{
        font-size: 56px; 
        color: #fff;
        margin-bottom: 0rem;
    }
    .welcome-part h1{
        font-family: 'El Messiri', sans-serif;
        font-weight: Bold; 
        font-size: 100px; 
        color: #ffc60b;
        text-shadow: 2px 2px 0px #000000;
    }
    .welcome-image img{
        max-width: 100%;
        padding-top: 100px;
    }
    .btn-outline-custom, .btn-custom{
        border-radius: 50px;
        width: 160px;
    }
    .btn-outline-custom{
        color: #ffc60b !important;
        border-color: #ffc60b !important;
    }
    .btn-outline-info.btn-outline-custom:hover,
    .btn-outline-info.btn-outline-custom:focus {
        background-color: #ffc60b !important;
        color: #fff !important;
        box-shadow: none;
    }
    .btn-outline-info:not(:disabled):not(.disabled).active:focus, 
    .btn-outline-info:not(:disabled):not(.disabled):active:focus, .show>.btn-outline-info.dropdown-toggle:focus{
        box-shadow: none;
    }
    .btn-custom, .btn-custom:hover, .btn-custom:focus{
        background-color: #a3c624;
        border-color: #a3c624;
        box-shadow: none !important;
    }
    .btn-info:not(:disabled):not(.disabled).active, 
    .btn-info:not(:disabled):not(.disabled):active, 
    .show>.btn-info.dropdown-toggle,
    .btn-info:not(:disabled):not(.disabled).active:focus, 
    .btn-info:not(:disabled):not(.disabled):active:focus, 
    .show>.btn-info.dropdown-toggle:focus{
        background-color: #a3c624;
        border-color: #a3c624;
        box-shadow: none;
    }
    /*====================< Header Part Ends >===============*/
    </style>
@endsection

@section('content')


<section class="header-part">
    <div class="overlay">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="welcome-part text-center">
                    <h2 data-aos="fade-left" data-aos-duration="6000">Welcome To</h2>
                    <h1 data-aos="fade-right" data-aos-duration="6000">LU <span style="    color: #04a653">ALUMNI</span></h1>
                    <h1 data-aos="fade-up" data-aos-duration="7000" style="font-size: 82px; margin-top: -42px;">ASSOCIATION</h1>
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
                <div class="title-heading about-us">
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
                <div class="title-heading text-center">
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
                          <span class="date"><i class="far fa-calendar-alt"></i> January 12, 2019</span>
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
                          <span class="date"><i class="far fa-calendar-alt"></i> January 12, 2019</span>
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
                          <span class="date"><i class="far fa-calendar-alt"></i> January 12, 2019</span>
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
                          <span class="date"><i class="far fa-calendar-alt"></i> January 12, 2019</span>
                          <p class="card-text">Some quick example text to build on the card title...</p>
                          <a class="btn btn-outline-primary btn-custom-details" href="#" role="button">See Details</a>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="event-part">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-heading text-center">
                    <h2 class="color-one">this is our <span class="color-two font-bold">Successful Events</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="event-details">
                    <div class="owl-carousel owl-theme" id="event">
                        <div class="item">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('images/news.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="date"><i class="far fa-calendar-alt"></i> January 12, 2019</p>
                                    <h4><a href="#" class="card-text">Teachers Day</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('images/news.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="date"><i class="far fa-calendar-alt"></i> January 12, 2019</p>
                                    <h4><a href="#" class="card-text">Fathers Day</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('images/news.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="date"><i class="far fa-calendar-alt"></i> January 12, 2019</p>
                                    <h4><a href="#" class="card-text">Mothers Day</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('images/news.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="date"><i class="far fa-calendar-alt"></i> January 12, 2019</p>
                                    <h4><a href="#" class="card-text">Sleeping Day</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="successful-story-part">
    <div class="layout">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-heading text-center">
                        <h2 class="color-one">this is our <span class="color-two font-bold">Successful Stories</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme" id="story">
                        <div class="item">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{ asset('images/background.jpg') }}" alt="" class="img-thumbnail">
                                </div>
                                <div class="col-md-6">
                                    <h3 class="profile-name" style="padding-top: 50px;"><a href="#">Pias Das Raaz</a></h3>
                                    <q>Web Fullstack Developer</q>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem placeat autem voluptate aut, natus adipisci? Atque voluptate quidem cupiditate ipsa!</p>
                                    <ul class="social-list text-left">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection

@section('scripts')
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script>
    // ============< Event Part >===========

$(document).ready(function(){
    $('#event').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots: false,
        autoplay: true,
        smartSpeed: 1200,
        autoplayTimeout: 3000,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });
});
    
// ============< story Part >===========
$(document).ready(function(){
    $('#story').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        autoplay: true,
        smartSpeed: 1200,
        autoplayTimeout: 3000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
});
</script>
@endsection


