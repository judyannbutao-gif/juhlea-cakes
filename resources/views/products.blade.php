<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products | Juhlea Cakes</title>
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
            <h1>Our Products</h1>

            <div class="product-list">
                <div class="card">
                    <img src="{{ asset('images/product1.jpg') }}" alt="Chocolate Cake">
                    <h3>Chocolate Cake</h3>
                    <p>Moist chocolate cake with rich chocolate frosting.</p>
                    <p><strong>₱650</strong></p>
                </div>

                <div class="card">
                    <img src="{{ asset('images/product2.jpg') }}" alt="Red Velvet Cake">
                    <h3>Red Velvet Cake</h3>
                    <p>Soft red velvet cake with creamy cheese frosting.</p>
                    <p><strong>₱750</strong></p>
                </div>

                <div class="card">
                    <img src="{{ asset('images/product3.jpg') }}" alt="Cupcakes">
                    <h3>Cupcakes (Box of 6)</h3>
                    <p>Assorted cupcakes, perfect for parties and gifts.</p>
                    <p><strong>₱350</strong></p>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <p>&copy; 2026 Juhlea Cakes. All rights reserved.</p>
    </footer>

</body>
</html>