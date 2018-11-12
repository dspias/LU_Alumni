<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">


<title>LU_ALumni @yield('title')</title>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

{{-- If Importent to add some css files --}}
@yield('stylesheet')

<!-- Fonts -->
<link rel="dns-prefetch" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->



{{-- ================< Bootstrap CSS Starts >============== --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
{{-- =================< Bootstrap CSS Ends >=============== --}}


{{-- ================< Fire-UI Starts >============== --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/fire-css/assets/navbar.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/fire-css/assets/input.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/fire-css/nice-select.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/fire-css/global-style.css') }}">
{{-- =================< Fire-UI Ends >=============== --}}



{{-- ================< Custom CSS Starts >============== --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
{{-- =================< Custom CSS Ends >=============== --}}
