@extends('layouts.withnav')

@section('title', '| Home')

@section('stylesheet')
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" href="{{ asset('css/fire-css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fire-css/assets/carousel.css') }}">
@endsection

@section('content')


<section class="fire_carousel fire_carousel5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="carousel5_wrapper owl-carousel">
                    <img src="{{ asset('images/carousel-img10.jpg') }}" class="radius_10" alt="carousel-img">
                    <img src="{{ asset('images/carousel-img11.jpg') }}" class="radius_10" alt="carousel-img">
                    <img src="{{ asset('images/carousel-img12.jpg') }}" class="radius_10" alt="carousel-img">
                </div>
            </div>
        </div>
    </div>
</section>


@endsection

@section('scripts')
   
@endsection


