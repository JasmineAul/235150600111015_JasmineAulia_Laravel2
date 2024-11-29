<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Blog')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="navbar">
        <div class="brand">My Blog</div>
        <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="#Testimonials">Testimonials</a></li>
            <li><a href="#Blog">Blog</a></li>
            <li><a href="#" class="Support Us">Support Us</a></li>
        </ul>
    </div>

    <div class="container">
        <div class="container-fluid d-flex justify-content-between">
        @yield('content')
    </div>

    <footer class="footer">
        <p>&copy; 2024 My Blog. All rights reserved.</p>
    </footer>
</body>
</html>
