<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse" style="min-height:100vh">
    <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
            {{-- <li class="nav-item">
                <a class="nav-link active" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-home">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                    </svg>
                    Dashboard <span class="sr-only">(current)</span>
                </a>
            </li> --}}
            <li class="nav-item">
                <span class="nav-link" href="#">
                    <i class="fas fa-video"></i>
                    Series & Episode
                </span>
            </li>
            <ul class="ml-4 nav flex-column">
                <li class="nav-item small">
                    <a class="nav-link" href="#">
                        List of Series
                    </a>
                </li>
                <li class="nav-item small">
                    <a class="nav-link" href="#">
                        List of Episodes
                    </a>
                </li>
                <li class="nav-item small">
                    <a class="nav-link" href="#">
                        List of Quizzes
                    </a>
                </li>
            </ul>

            <li class="nav-item">
                <span class="nav-link" href="#">
                    <i class="fa fa-shopping-cart"></i>
                    Transaction
                </span>
            </li>
            <ul class="ml-4 nav flex-column">
                <li class="nav-item small">
                    <a class="nav-link" href="/admin/transaction">
                        List of Transaction
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link small" href="/admin/transaction/pending">
                        List of Pending Transaction
                    </a>
                </li>
            </ul>
            <li class="nav-item">
                <span class="nav-link" href="#">
                    <i class="fa fa-users"></i>
                    Member
                </span>
            </li>
            <ul class="ml-4 nav flex-column">
                <li class="nav-item small">
                <a class="nav-link" href="#">
                    List of Member
                </a>
            </li>
        </ul>

        <li class="nav-item">
            <span class="nav-link" href="#">
                <i class="fa fa-sticky-note"></i>
                Blog
            </span>
        </li>
        <ul class="ml-4 nav flex-column">
            <li class="nav-item small">
                <a class="nav-link" href="#">
                    List of Posts
                </a>
            </li>
        </ul>
    </div>
</nav>
