@extends('layouts.withnav') 

@section('title', '| searchable users') 
@section('stylesheet')
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.css') }}">
@endsection

@section('content')

<section class="career-advice-part">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @foreach ($users as $user)
                    <h3>{{ $user->first_name. " ". $user->last_name }}</h3>
                    <p>{{ $user->department }}</p>
                    <p>{{ $user->university_batch }}</p>
                    <p>{{ $user->graduation_year }}</p>
                    <hr>
                @endforeach
            </div>

            <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-2 offset-md-5">
                            {{ $users->links() }}
                        </div>
                        <div class="offset-md-5">				
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>

@endsection 

@section('scripts')

@endsection