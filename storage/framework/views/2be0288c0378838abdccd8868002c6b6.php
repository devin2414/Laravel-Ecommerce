<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D'SeatCraft</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        /* CSS tetap sama seperti sebelumnya */
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.5rem 1rem;
            background-color: rgba(223, 216, 159, 0.36);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar img {
            max-height: 50px;
        }

        .navbar a {
            text-decoration: none;
            color: #333;
            margin: 0 1rem;
            font-size: 14px;
            text-transform: uppercase;
        }

        .hero {
            position: relative;
            background-image: url('/images/room-1336497_1280.jpg');
            background-size: cover;
            background-position: center;
            height: 90vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            text-align: center;
        }

        .hero h1 {
            font-size: 3rem;
            margin: 0;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.7);
        }

        .hero p {
            font-size: 1.2rem;
            margin: 1rem 0;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.7);
        }

        .hero button {
            padding: 0.8rem 1rem;
            background-color: #fff;
            color: #333;
            border: none;
            border-radius: 25px;
            font-size: 1rem;
            text-transform: uppercase;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .hero button:hover {
            background-color: rgba(240, 230, 230, 0.89);
        }

        .book-your-look {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #EFF3EA; /* Updated background color */
            padding: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin: 2rem auto;
            width: 90%;
            max-width: 1200px;
            border-radius: 8px;
        }

        .book-your-look .images {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            justify-content: center;
            margin-right: 40px;
        }

        .book-your-look .image-container {
            position: relative;
            width: 250px;
            height: 240px;
        }

        .book-your-look .image-number {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: rgba(223, 216, 159, 0.63);
            color: #fff;
            font-size: 14px;
            padding: 5px 10px;
            border-radius: 12px;
            z-index: 1;
        }

        .book-your-look .images img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 8px;
        }

        .book-your-look .text-content {
            max-width: 500px;
        }

        .book-your-look h1 {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            margin: 0 0 10px;
            color: #333;
        }

        .book-your-look h2 {
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
            margin: 0 0 20px;
            color: #8b5e5f;
            letter-spacing: 1px;
        }

        .book-your-look p {
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 20px;
            color: #555;
        }

        .book-your-look button {
            background-color: rgba(223, 216, 159, 0.63);
            border: none;
            padding: 12px 24px;
            font-size: 14px;
            cursor: pointer;
            border-radius: 20px;
            color: #fff;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .book-your-look button:hover {
            background-color: rgba(51, 28, 9, 0.64);
            transform: translateY(-2px);
        }

        .contact-container {
            display: flex;
            background-color:rgb(240, 240, 240);
            width: 100%;
            height: auto;
            object-fit: cover;
            border-radius: 0px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            align-items: stretch;
        }

        .contact-image {
            flex: 1;
        }

        .contact-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .contact-details {
            flex: 1;
            background-color:rgb(105, 62, 4);
            padding: 150px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .contact-details h2 {
            margin: 0;
            font-size: 24px;
            color:rgb(245, 244, 232);
        }

        .contact-details p {
            margin: 10px 0;
            color:rgb(245, 244, 232);
        }

        .contact-details .contact-info {
            margin-top: 20px;
        }

        .contact-details .contact-info p {
            margin: 5px 0;
            color:rgb(245, 244, 232);
        }

        .contact-details .social-icons {
            margin-top: 20px;
        }

        .contact-details .social-icons a {
            margin-right: 10px;
            color:rgb(245, 244, 232);
            text-decoration: none;
            font-size: 20px;
        }

        @media (max-width: 768px) {
            .contact-container {
                flex-direction: column;
            }

            .contact-image,
            .contact-details {
                flex: none;
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <div class="navbar">
        <div style="display: flex; align-items: center;">
            <img src="/images/logo kursi.png" alt="D'SeatCraft Logo">
            <h2 style="margin-left: 0;">D'SeatCraft</h2>
        </div>
        <div>
            <a href="<?php echo e(route('home')); ?>">Home</a>
            <a href="<?php echo e(url('/about-me')); ?>">About Me</a>
            <a href="<?php echo e(route('products.show')); ?>">Shop</a>
        </div>

        <?php if(Route::has('login')): ?>
        <div class="flex items-center space-x-4">
            <?php if(auth()->guard()->check()): ?>
                <!-- Tampilkan Dashboard sesuai peran -->
                <?php if(Auth::user()->role === 'admin'): ?>
                    <a href="<?php echo e(route('admin.dashboard')); ?>" class="text-[#D17B88] hover:text-[#F28482]">Admin Dashboard</a>
                <?php else: ?>
                    <a href="<?php echo e(route('logout')); ?>" class="text-[#D17B88] hover:text-[#F28482]">Logout</a>
                <?php endif; ?>
            <?php else: ?>
                <a href="<?php echo e(route('login')); ?>" class="text-[#D17B88] hover:text-[#F28482]">Login</a>
                <?php if(Route::has('register')): ?>
                    <a href="<?php echo e(route('register')); ?>" class="text-[#D17B88] hover:text-[#F28482]">Register</a>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    <?php endif; ?>
    </div>

    <!-- Hero Section -->
    <div class="hero">
        <div>
          h1>Welcome to D'SeatCraft - Your Ultimate Destination for Quality Seating!</h1>
            <p>✨ Explore our collection of chairs, blending elegance, comfort, and functionality with D'SeatCraft.</p>
            <a href="<?php echo e(url('/collections')); ?>">
                <button>See Our Collections</button>
            </a>
        </div>
    </div>

    <!-- Book Your Look Section -->
    <div class="book-your-look">
        <div class="images">
            <div class="image-container">
                <span class="image-number">1</span>
                <img src="/images/1.png" alt="1.png">
            </div>
            <div class="image-container">
                <span class="image-number">2</span>
                <img src="/images/3.png" alt="3.png">
            </div>
            <div class="image-container">
                <span class="image-number">3</span>
                <img src="/images/4.png" alt="4.png">
            </div>
            <div class="image-container">
                <span class="image-number">4</span>
                <img src="/images/2.png" alt="2.png">
            </div>
        </div>
        <div class="text-content">
            <h1>Our Stunning Collections</h1>
            <h2>LET'S CREATE YOUR DREAM SPACE</h2>
            <p>Ready to elevate your interior? Whether for your home, office, or a design project, D'SeatCraft offers a premium selection of chairs crafted perfectly to suit your needs. Click below to explore our collection and start shopping now!</p>
            <a href="<?php echo e(route('results')); ?>">
                <button>SEE THE RESULTS</button>
            </a>
        </div>
    </div>

    <!-- Footer Section -->
    <footer>
        <div class="contact-container">
            <div class="contact-image">
                <img src="/images/footer 1.jpg" alt="footer 1.jpg"/>
            </div>
            <div class="contact-details">
                <h2>
                    GET IN TOUCH
                </h2>
                <p>
                    Let's Create Something Beautiful Together!
                </p>
                <div class="contact-info">
                    <p>
                        <strong>
                            CONTACT
                        </strong>
                    </p>
                    <p>
                        Email: dseatcraft@gmail.com
                    </p>
                    <p>
                        +1 234 456 789
                    </p>
                    <p>
                        Serving Europe. Available for online inquiries.
                    </p>
                </div>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\octowbersdesignstd\resources\views/welcome.blade.php ENDPATH**/ ?>