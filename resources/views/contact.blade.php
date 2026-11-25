<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Juhlea Cakes</title>
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
            <h1>Contact Us</h1>

            <p><strong>Address:</strong> Nasipit, Caraga, Philippines</p>
            <p><strong>Contact Number:</strong> 0912-345-6789</p>
            <p><strong>Email:</strong> hello@juhleacakes.com</p>
            <p><strong>Facebook:</strong> facebook.com/juhleacakes</p>
            <p><strong>Instagram:</strong> @juhleacakes</p>

           
            </form>
        </section>
    </main>

    <footer class="footer">
        <p>&copy; 2026 Juhlea Cakes. All rights reserved.</p>
    </footer>

</body>
</html> 