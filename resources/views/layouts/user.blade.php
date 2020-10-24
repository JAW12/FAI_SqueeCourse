<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @include('layouts.head')
    <style>
        #header{
            min-height: 55vh;
            background-image: linear-gradient(to right , #4286f4, #32adff);
        }

        .linear{
            background-image: linear-gradient(to right , #4286f4, #32adff);
        }

        .row.display-flex {
            display: flex;
            flex-wrap: wrap;
        }
        .row.display-flex > [class*='col-'] {
            display: flex;
            flex-direction: column;
        }

        #navbarDropdown.pakeP:after{
            vertical-align: 1rem;
        }

        .grey{
            background-color: rgb(240, 238, 238);
        }

        #itemProfile:active p, #itemProfile:active h1{
            color: white !important;
        }

        @media (max-width: 767px)
        {

            .navbar{
                position: static;
            }
            #navbarDropdown{
                display:none;
            }

            #navbarDropdown+.dropdown-menu{
                display:block
            }

            #profile p{
                text-align: right;
                /* justify-content: start !important; */
            }
        }
    </style>
    @yield('style')
</head>
<body>
    @include('layouts.user.header')
    <div class="min-vh-100 grey">
        @yield('content')
    </div>
    @include('layouts.user.footer')
    <script>
        $("#navbarDropdown").has("h1").after().toggleClass('pakeP');
    </script>
    @yield('script')
</body>
</html>
