<nav class="navbar navbar-light sticky-top bg-light flex-md-nowrap shadow-sm">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="{{route('admin.home')}}"><img src="{{asset('images/logo.png')}}" height="50" alt=""></a>
    {{-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> --}}

    <ul class="navbar-nav ml-auto px-3">
        <li class="nav-item text-nowrap">
        <a class="nav-link" href="{{route('admin.logout')}}">Sign out</a>
        </li>
    </ul>
    <button class="nav-link navbar-toggler d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</nav>
