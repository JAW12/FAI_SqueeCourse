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
            /* background-image: linear-gradient(to right , #4286f4, #32adff); */
            background : linear-gradient(45deg, #5B86E5, #36D1DC)
        }

        .linear{
            /* background-image: linear-gradient(to right , #4286f4, #32adff); */
            background : linear-gradient(45deg, #5B86E5, #36D1DC)
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

        @media (max-width: 768px)
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
    @auth
        @if(Auth::user()->email_verified_at == null)
        <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
            Email has not been verified yet, please click <a href="{{route('send.verification')}}">here</a> to verify your email
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
    @endauth
    <div class="min-vh-100 grey">
        @yield('content')
    </div>
    @include('layouts.user.footer')
    <script>
        $("#navbarDropdown").has("h1").after().toggleClass('pakeP');
        $(document).on('click', '#navbarAccount .dropdown-menu', function (e) {
            e.stopPropagation();
        });
        $("#clickProfile").click(function(){
            $("#collapseProfile").slideToggle("slow");
        });
        $("#clickMember").click(function(){
            $("#collapseMember").slideToggle("slow");
        });
        $("#clickQuiz").click(function(){
            $("#collapseQuiz").slideToggle("slow");
        });
    </script>
    @yield('script')
</body>
</html>
