<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <title>@yield('title')</title>

</head>
@yield('navbar')

<body>
    <div class="container mx-auto mt-1">
        @yield('content')
    </div>
</body>

</html>