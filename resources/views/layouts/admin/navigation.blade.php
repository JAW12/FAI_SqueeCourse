<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse" style="min-height:100vh; position: fixed;">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <span class="nav-link" href="{{ route('admin.series') }}">
                    <i class="fas fa-video"></i>
                    Series & Episode
                </span>
            </li>
            <ul class="ml-4 nav flex-column">
                <li class="nav-item small">
                    <a class="nav-link" href="{{ route('admin.series') }}">
                        List of Series
                    </a>
                </li>
                <li class="nav-item small">
                    <a class="nav-link" href="{{ route('admin.episodes') }}">
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
                <a class="nav-link" href="/admin/member">
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
                <a class="nav-link" href="/admin/blog">
                    List of Posts
                </a>
            </li>
        </ul>
    </div>
</nav>
