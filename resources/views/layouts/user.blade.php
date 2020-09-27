<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @include('layouts.head')
</head>
<body>
    @include('layouts.user.header')
    <div class="min-vh-100 pt-3">
        @yield('content')
    </div>
    @include('layouts.user.footer')
</body>
</html>
