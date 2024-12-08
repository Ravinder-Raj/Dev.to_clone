<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dev Clone</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    @include('partials.navbar')
    @include('partials.leftSidebar')
    @yield('content')
    @include('partials.rightSidebar')
</body>
</html>