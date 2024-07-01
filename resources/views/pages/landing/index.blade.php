<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="antialiased">
    @include('components.header-landing')

    <div class="container mx-auto">
        @yield('content')askdoaskd
    </div>
</body>
</html>

