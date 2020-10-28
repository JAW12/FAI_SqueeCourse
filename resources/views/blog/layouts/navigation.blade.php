<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm py-0">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('images/logo.png')}}" height="70" alt=""></a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active"><a href="{{route('blog.home')}}" class="nav-link">Explore</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Filter Category
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        @foreach ($dataNavigasiCategory as $category)
                            <a class="dropdown-item"
                                href="{{route('blog.category', $category->slug)}}">
                                {{ $category->nama }}
                            </a>
                        @endforeach
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" action="{{route('blog.home')}}">
                <div class="input-group">
                    <input type="search" name="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-dark my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</nav>
