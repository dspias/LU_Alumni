<header class="bg_f8f fire_header4 header_common">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        {{-- <a class="navbar-brand order-1 order-lg-1" href="#"><img src="images/logo.png" alt="logo"></a> --}}
                        <a class="navbar-brand order-1 order-lg-1" href="#">L O G O</a>
                        <button class="navbar-toggler order-3" type="button" data-toggle="collapse" data-target="#navbar4" aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                        <div class="collapse navbar-collapse order-4 order-lg-2" id="navbar4">
                            <ul class="navbar-nav">
                                <li class="active"><a href="/">Home</a></li>

                                <li class="dropdown"><a href="javascript:void(0)">Community <i class="fa fa-angle-down"></i></a>
                                    <ul class="custom_dropdown">
                                        <li><a class="dropdown-item" href="#">About</a></li>
                                        <li><a class="dropdown-item" href="{{ route('departments.index') }}">Department's</a></li>
                                        <li><a class="dropdown-item" href="#">Clubs</a></li>
                                        <li><a class="dropdown-item" href="#">Volentiers</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="javascript:void(0)">Career & Networking <i class="fa fa-angle-down"></i></a>
                                    <ul class="custom_dropdown">
                                        <li><a class="dropdown-item" href="#">Career Advice</a></li>
                                        <li><a class="dropdown-item" href="#">Study Abroad</a></li>
                                        <li><a class="dropdown-item" href="#">General Advice</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="javascript:void(0)">Programs & Events <i class="fa fa-angle-down"></i></a>
                                    <ul class="custom_dropdown">
                                        <li><a class="dropdown-item" href="#">Upcomming Events</a></li>
                                        <li><a class="dropdown-item" href="#">Succesfull Events</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="javascript:void(0)">Stories <i class="fa fa-angle-down"></i></a>
                                    <ul class="custom_dropdown">
                                        <li><a class="dropdown-item" href="#">Success Stories</a></li>
                                        <li><a class="dropdown-item" href="#">Career Expert</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="javascript:void(0)"><img src="{{ asset('images/graduate.png') }}" alt="USER" class="user-image">@guest user @else{{ Auth::user()->first_name }} @endguest<i class="fa fa-angle-down"></i></a>

                                @guest
                                    <ul class="custom_dropdown">
                                        <li><a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                                    @if (Route::has('register'))
                                        <li><a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                                	@endif

                                    </ul>
                            
                                @else

                                    <ul class="custom_dropdown">
                                        <li><a class="dropdown-item" href="#">{{ Auth::user()->first_name }}'s profile</a></li>

                                        <li>

                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>

                                        </li>
                                    </ul>
                                @endguest

                                </li>
                            </ul>
                        </div>
                        <ul class="download pos_relative order-2 order-lg-3">
                            <li>
                                <div class="form-group has-search search-form">
                                    <span class="fa fa-search form-control-feedback"></span>
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>