<footer class="container-fluid py-5 shadow">
    <div class="container">
    <div class="row">
        <div class="col-6 col-md">
            <h5>Account</h5>
            <ul class="list-unstyled text-small">
                @guest
                    <li><a class="text-muted" href="#">Login</a></li>
                    <li><a class="text-muted" href="#">Register</a></li>
                @endguest
                @auth
                    <li><a class="text-muted" href="#">Your Profile</a></li>
                @endauth
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>References</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="https://docs.microsoft.com/en-us/dotnet/csharp/" target="_blank">C#</a></li>
                <li><a class="text-muted" href="https://devdocs.io/css/" target="_blank">CSS</a></li>
                <li><a class="text-muted" href="https://devdocs.io/javascript/" target="_blank">JS</a></li>
                <li><a class="text-muted" href="https://laravel.com/docs/8.x" target="_blank">Laravel</a></li>
                <li><a class="text-muted" href="https://www.php.net/docs.php" target="_blank">PHP</a></li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>Series</h5>
            <ul class="list-unstyled text-small">
                <li>
                    <a class="text-muted" href="{{ url('/series') }}">
                        Explore All
                    </a>
                </li>
                @foreach ($dataNavigasiSeries as $series)
                    <li>
                        <a class="text-muted" href="{{ url('/series/' . $series->slug) }}">
                            {{ $series->judul }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="http://telegram.me/SqueeSupportBot">FAQ</a></li>
                <li><a class="text-muted" href="#">Testimonials</a></li>
                <li><a class="text-muted" href="#">Privacy Terms</a></li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>Contact</h5>
            <ul class="list-unstyled text-small">
                <li><span class="text-muted" href="#">squee.course@gmail.com</span></li>
            </ul>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-12 col-md-8">
            <img src="{{asset('images/logo.png')}}" height="50" alt=""> for university project purpose only. References by: <a class="text-primary" href="http://www.parsinta.com">www.parsinta.com</a>
        </div>
        <div class="col-12 col-md-4">
            <a href="https://discord.gg/gWduddD" class="btn btn-dark mt-1"><i class="fab fa-github"></i></a>
            <a href="https://www.youtube.com/c/parsinta" class="btn btn-dark mt-1"><i class="fab fa-youtube"></i></a>
            <a href="https://instagram.com/parsintax" class="btn btn-dark mt-1"><i class="fab fa-instagram"></i></a>
            <a href="https://web.facebook.com/parsinta" class="btn btn-dark mt-1"><i class="fab fa-facebook"></i></a>
            <a href="https://twitter.com/parsintax" class="btn btn-dark mt-1"><i class="fab fa-twitter"></i></a>
        </div>
    </div>
</div>
</footer>
