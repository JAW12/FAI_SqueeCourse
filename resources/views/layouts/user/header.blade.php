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
        <a href="{{route('login')}}" class="btn btn-primary ml-lg-2 my-3 my-lg-0">Sign In</a>
        <a href="{{route('register')}}" class="btn btn-primary ml-lg-2 my-3 my-lg-0">Sign Up</a>
    </div>
</nav>
