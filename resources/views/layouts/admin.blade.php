<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
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

        /* supaya image height di card sama semua */
        .card-img-top {
            width: 100%;
            height: 13vw;
            object-fit: cover;
        }

        /* supaya heightnya select2 kalo lagi mode single selection ga penyet */
        .select2-selection__rendered {
            line-height: 31px !important;
        }
        .select2-container .select2-selection--single {
            height: 35px !important;
        }
        .select2-selection__arrow {
            height: 34px !important;
        }
    </style>

    @include('layouts.head')
    @yield('style')
</head>
<body>
    @include('layouts.admin.header')
    <div class="container-fluid">
        <div class="row">
            @include('layouts.admin.navigation')
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                @yield('content')
            </main>
        </div>
    </div>
    @yield('script')
</body>
</html>
