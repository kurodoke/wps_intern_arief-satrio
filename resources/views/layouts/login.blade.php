<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title', 'WPS')</title>
</head>

<body>
    <!-- Body Content -->
    <div class="container m-auto  max-w-screen-xl">
        @yield('content')
    </div>
</body>
