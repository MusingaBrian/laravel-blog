<!DOCTYPE html>
<html lang="en" class="h-full" data-theme="fantasy">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>
<body class="w-full">
    <header>
        @yield('header')
    </header>
    <section>
        @yield('content')
    </section>
</body>
</html>