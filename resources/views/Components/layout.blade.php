<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>App</title>
</head>

<body>
    <div class="min-h-full">
        <x-navbar></x-navbar>
        <x-heading>{{ $heading }}</x-heading>

        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
              <!-- Your content -->
            </div>
        </main>
    </div>
</body>
</html>