<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('styles')
</head>

<body>
    @include('user.partials.navbar')
    @include('user.partials.head')

    <div class="flex justify-center">
        <div class="w-full max-w-5xl mb-2">
            @yield('content')
        </div>
    </div>
</body>
@yield('scripts')

</html>