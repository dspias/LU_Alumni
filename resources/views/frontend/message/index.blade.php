@extends('layouts.withnav')

@section('title', '| your messages')

@section('stylesheet')
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.css') }}">

    <style>
        .message-part{
            padding-top: 100px;
            padding-bottom: 100px;
        }
    </style>
@endsection

@section('content')

<section class="message-part">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">
                        <span style="font-size: 20px; color:green;">{{ Auth::user()->first_name }}</span> Messages
                    </div>
                    <div class="card-body">
                        <chat-app :user="{{ Auth::user() }}"></chat-app>
                    </div>
                </div>
            </div>
        </div>    
    </div>
</section>

@endsection @section('scripts')

@endsection