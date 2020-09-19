<nav class="navbar navbar-expand-md navbar-light top-menu">
    <div class="container">
        <div class="collapse navbar-collapse text-success" id="">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <i class="fa fa-envelope-o fa-lg"></i> info@shivayfinance.com
                </li>
                <li class="nav-item">
                    <i class="fa fa-volume-control-phone fa-lg"></i> +91-9634433162
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-success" href=""><i class="fa fa-facebook"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-success" href=""><i class="fa fa-instagram"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-success" href=""><i class="fa fa-twitter-square"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-success" href=""><i class="fa fa-youtube-play"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-md sticky-top navbar-dark bg-success shadow-sm main-menu">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Shivay Finance') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headerMenu" aria-controls="headerMenu" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="headerMenu">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link text-white" href="#">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Loan
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Business</a>
                      <a class="dropdown-item" href="#">Home</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Education</a>
                      <a class="dropdown-item" href="#">Car</a>
                      <a class="dropdown-item" href="#">Personal</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('front.page', 'about-us')}}">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('front.page', 'contact-us')}}">Contact Us</a>
                  </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a>

                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>