<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @section('head')
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" type="text/css">
    @show
</head>
<body>
    @yield('header')
    @yield('body')
    ok
</body>
</html>