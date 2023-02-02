<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Santi</title>
    @vite('resources/js/app.js')
    @yield('head')
</head>
<body>

    @include('coponents.header')
    @yield('content')
    @include('coponents.footer')
    
</body>
</html>