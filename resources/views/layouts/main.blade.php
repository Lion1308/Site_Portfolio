<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') :: Portfolio</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
    <x-header></x-header>
@yield('content')
    <x-footer></x-footer>
</body>
</html>
