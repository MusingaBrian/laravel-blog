<!DOCTYPE html>
<html lang="en" class="h-full" data-theme="capcake">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield('title', 'JOBSLIST')</title>
</head>
<body class="w-full">
    <header>
        @yield('header')
    </header>
    <section class="container mx-auto">
        @yield('content')
    </section>
</body>
</html>