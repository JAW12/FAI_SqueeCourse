<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow-sm py-0">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
        aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('images/logo.png')}}" height="70" alt=""></a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Series
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    {{-- <a class="dropdown-item" href="{{route('series.category', 5)}}">
                        PHP
                    </a>
                    <a class="dropdown-item" href="#">
                        Laravel
                    </a>
                    <a class="dropdown-item" href="#">
                        CSS
                    </a> --}}

                    @foreach ($dataNavigasiCategory as $category)
                        <a class="dropdown-item"
                            href="{{route('series.category', $category->slug)}}">
                            {{ $category->nama }}
                        </a>
                    @endforeach

                </div>
            </li>
            <li class="nav-item"><a href="{{route('series.home')}}" class="nav-link {{ (request()->is('series*')) ? 'active' : '' }}">Explore</a></li>
            <li class="nav-item"><a href="{{route('blog.home')}}" class="nav-link">Blog</a></li>
        <li class="nav-item"><a href="{{ route('membership.home') }}" class="nav-link {{ (request()->is('membership*')) ? 'active' : '' }}">Membership</a></li>
        </ul>
        <form class="form-inline my-2 my-lg-0 form-search" method="GET"
        action="{{ url('/searchseries/show') }}">
            <div class="input-group">
                <input type="search" class="form-control cari" placeholder="Search" aria-label="Search" aria-describedby="button-addon2" name="q">

                <div class="input-group-append">
                    <button class="btn btn-outline-dark my-sm-0" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
        @guest
            <a href="{{route('login')}}" class="btn btn-primary ml-lg-2 my-3 my-lg-0">Sign In</a>
            <a href="{{route('register')}}" class="btn btn-primary ml-lg-2 my-3 my-lg-0">Sign Up</a>
        @endguest
        @auth
        <ul class="navbar-nav mt-lg-0">
            <li class="nav-item dropdown" id="navbarAccount">
                <a class="nav-link dropdown-toggle text-center" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{Auth::user()->gravatar()}}" alt="" height="50" width="50" class="rounded-circle" style="object-fit: cover; object-position: center;">
                </a>
                <div class="dropdown-menu dropdown-menu-right p-0" aria-labelledby="navbarDropdown">
                <div class="dropdown-item p-3" id="itemProfile">
                    <a href="{{route('user.profile', Auth::user()->username)}}" class="text-decoration-none text-dark">
                        <div class="d-flex justify-content-between" id="profile">
                            <div>
                                <img src="{{Auth::user()->gravatar()}}" alt="" height="50" width="50" class="rounded-circle" style="object-fit: cover; object-position: center;">
                            </div>
                            <div class="ml-2">
                                <p class="font-weight-bold mb-1">{{Auth::user()->nama}}</p>
                                <p class="text-muted small">Look at your profile!</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="dropdown-header" id="clickProfile">Profile <i class="fa fa-caret-down"></i></div>
                <div id="collapseProfile" style="display:none">
                    <a class="dropdown-item p-3" href="{{ route("watchlist") }}"><i class="fa fa-clock"></i> Your Watchlist</a>
                    <a class="dropdown-item p-3" href="{{route('settings.edit')}}"><i class="fa  fa-user"></i> Change Your Profile</a>
                    <a class="dropdown-item p-3" href="{{route('settings.password')}}"><i class="fa fa-lock"></i> Change Password</a>
                </div>
                <div class="dropdown-divider"></div>
                <div class="dropdown-header" id="clickMember">Membership <i class="fa fa-caret-down"></i></div>
                <div id="collapseMember" style="display:none">
                    <a class="dropdown-item p-3" href="/history/membership"><i class="fa fa-users"></i> Your Membership</a>
                    <a class="dropdown-item p-3" href="/history/transaction"><i class="fa fa-money-bill-alt"></i> History Transaction</a>
                </div>
                <div class="dropdown-divider"></div>
                <div class="dropdown-header" id="clickQuiz">Quiz <i class="fa fa-caret-down"></i></div>
                <div id="collapseQuiz" style="display:none">
                    <a class="dropdown-item p-3" href="/history/quiz"><i class="fa fa-pencil-alt"></i> History Quiz</a>
                </div>
                <div class="dropdown-divider"></div>
                <a class="dropdown-header pb-3 text-decoration-none text-danger" href="{{route('logout')}}"><i class="fa fa-sign-out-alt"></i> Sign Out</a>
                </div>
            </li>
        </ul>
        @endauth
    </div>
</nav>
