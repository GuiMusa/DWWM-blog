<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Mon site')</title>
    {{-- @vite('resources/css/app.css') --}}
</head>
<body>
    @include('layouts.header')

    <main class="p-4">
        @yield('content')
    </main>
</body>
</html>