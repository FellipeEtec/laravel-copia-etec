<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>

<body class="flex flex-col w-full h-screen bg-neutral-900 text-white">
    @include('components.header')
    <div class="container flex-1 mx-auto">
        @yield('content')
    </div>
</body>

</html>