<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
{{--    <link rel="stylesheet" href="{{ asset('resources/font/roboto') }}">--}}
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <meta name="viewport" content="width=device-width, initial-scale=1" />

</head>
<body class="wrapper">
    <x-header></x-header>
    <div class="content">
        @yield('content')
    </div>
    <x-footer></x-footer>
</body>
</html>
