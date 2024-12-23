<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Library Management')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap.min.css')}}">
</head>
<body>
    @include('layouts.navbar')

    <main class="py-4">
        @yield('content')
    </main>

    <footer class="text-center py-3">
        <p>© {{ date('Y') }} Library Management System</p>
    </footer>
    <script src="{{asset('assets/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
