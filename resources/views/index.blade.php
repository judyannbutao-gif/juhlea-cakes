<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Juhlea Cakes</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

    <header class="navbar">
        <div class="brand">
            <img src="{{ asset('images/logo.png') }}" alt="Juhlea Cakes Logo">
            <span>Juhlea Cakes</span>
        </div>
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">About Us</a>
            <a href="{{ route('products') }}">Products</a>
            <a href="{{ route('contact') }}">Contact Us</a>
        </nav>
    </header>

    <main>
        <img src="{{ asset('images/banner.jpg') }}" alt="Banner" class="banner">

        <section class="container">
            <h1>Welcome to Juhlea Cakes</h1>
            <p><em>Baked fresh for every celebration.</em></p>
            <p>Juhlea Cakes is a home-style bakery that makes delicious cakes for birthdays, weddings, and special occasions.</p>
            <a href="{{ route('products') }}" class="btn">Shop Now</a>
        </section>
    </main>

    <footer class="footer">
        <p>&copy; 2026 Juhlea Cakes. All rights reserved.</p>
    </footer>

</body>
</html> 