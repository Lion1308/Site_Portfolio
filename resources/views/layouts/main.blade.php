<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
    <x-header></x-header>
@yield('content')
    <x-footer></x-footer>
</body>
</html>
