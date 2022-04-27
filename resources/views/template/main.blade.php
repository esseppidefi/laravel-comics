<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/app.css">
    <title>@yield('title')</title>
</head>
<body>
    @include('_partials.header')
    @yield('content')
    @include('_partials.footer')
</body>
</html>