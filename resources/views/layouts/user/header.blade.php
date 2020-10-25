<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow-sm py-0">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
        aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"><img src="{{asset('images/logo.png')}}" height="70" alt=""></a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
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
            <li class="nav-item"><a href="{{route('series.home')}}" class="nav-link">Explore</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
        <li class="nav-item"><a href="{{ route('membership.home') }}" class="nav-link">Membership</a></li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <div class="input-group">
                <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-dark my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </form>
        @guest
            <a href="{{route('login')}}" class="btn btn-primary ml-lg-2 my-3 my-lg-0">Sign In</a>
            <a href="{{route('register')}}" class="btn btn-primary ml-lg-2 my-3 my-lg-0">Sign Up</a>
        @endguest
        @auth
        <ul class="navbar-nav mt-lg-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-center" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{Auth::user()->gravatar()}}" alt="" height="50" width="50" class="rounded-circle" style="object-fit: cover; object-position: center;">
                    {{-- <h1 class="d-inline-block p-0" style="font-size: 30pt; margin: 0;" id="iconProfile"><i class="fa fa-user-circle"></i></h1> --}}
                </a>
                <div class="dropdown-menu dropdown-menu-right p-0" aria-labelledby="navbarDropdown">
                <div class="dropdown-item p-3" id="itemProfile">
                    <a href="{{route('user.profile', Auth::user()->username)}}" class="text-decoration-none text-dark">
                        <div class="d-flex justify-content-between" id="profile">
                            <div>
                                <img src="{{Auth::user()->gravatar()}}" alt="" height="50" width="50" class="rounded-circle" style="object-fit: cover; object-position: center;">
                                {{-- <h1 class="p-0 m-0"><i class="fa fa-user-circle"></i></h1> --}}
                            </div>
                            <div class="ml-2">
                                <p class="font-weight-bold mb-1">{{Auth::user()->nama}}</p>
                                <p class="text-muted small">Look at your profile!</p>
                            </div>
                        </div>
                    </a>
                </div>
                <h6 class="dropdown-header">Profile</h6>
                <a class="dropdown-item p-3" href="#"><i class="fa fa-clock"></i> Your Watchlist</a>
                <a class="dropdown-item p-3" href="{{route('settings.edit')}}"><i class="fa fa-user"></i> Change Your Profile</a>
                <a class="dropdown-item p-3" href="#"><i class="fa fa-lock"></i> Change Your Password</a>
                <div class="dropdown-divider"></div>
                <h6 class="dropdown-header">Membership</h6>
                <a class="dropdown-item p-3" href="#"><i class="fa fa-users"></i> Your Membership</a>
                <a class="dropdown-item p-3" href="#"><i class="fa fa-money-bill-alt"></i> History Transaction</a>
                <div class="dropdown-divider"></div>
                <h6 class="dropdown-header">Quiz</h6>
                <a class="dropdown-item p-3" href="#"><i class="fa fa-pencil-alt"></i> History Quiz</a>
                <div class="dropdown-divider"></div>
                <h6 class="dropdown-header">Auth</h6>
                <a class="dropdown-item p-3" href="{{route('logout')}}"><i class="fa fa-sign-out-alt"></i> Sign Out</a>
                </div>
            </li>
        </ul>
        @endauth

    </div>
</nav>
