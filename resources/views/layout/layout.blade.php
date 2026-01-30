<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title')</title>
</head>
<body class="w-full min-h-screen relative bg-lightBackground font-inter flex flex-col items-center">
    @yield('navbar')

    @yield('header')

    <main class="w-full min-h-screen pt-12 pb-8 flex flex-col items-center">
        @yield('content')
    </main>
</body>
</html>