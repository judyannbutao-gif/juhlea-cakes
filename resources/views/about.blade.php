<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Juhlea Cakes</title>
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
        <section class="container">
            <h1>About Juhlea Cakes</h1>

            <img src="{{ asset('images/about.jpg') }}" alt="Our bakery" class="about-img">

            <h2>Company Background</h2>
            <p>Juhlea Cakes started in 2026 as a small home bakery. We bake cakes using quality ingredients for birthdays, weddings, and other celebrations in our community.</p>

            <h2>Vision</h2>
            <p>To be the most trusted and loved cake shop in our community.</p>

            <h2>Mission</h2>
            <p>To bake delicious and beautiful cakes at affordable prices that make every celebration special.</p>

            <h2>Goals and Objectives</h2>
            <ul>
                <li>Bake fresh and quality cakes every day.</li>
                <li>Provide excellent customer service.</li>
                <li>Open a physical bakery shop within three years.</li>
            </ul>
        </section>
    </main>

    <footer class="footer">
        <p>&copy; 2026 Juhlea Cakes. All rights reserved.</p>
    </footer>

</body>
</html>