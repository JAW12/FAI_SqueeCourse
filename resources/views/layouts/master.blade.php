<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @include('layouts.head')
    <style>
        body{
            margin: 0;
            padding: 0;
        }
    </style>
    @yield('style')
</head>
<body>
    @yield('content')
    @yield('script')
</body>
</html>
