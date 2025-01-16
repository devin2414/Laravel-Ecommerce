<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me - D'SeatCraft</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #EFF3EA; /* Warna background utama */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }
        .button-container {
            margin-bottom: 20px; /* Jarak tombol ke kontainer utama */
        }
        .back-home-button {
            display: inline-block;
            text-decoration: none;
            color: #fff;
            background-color: rgba(223, 216, 159, 0.63); /* Warna tombol */
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 25px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        .back-home-button:hover {
            background-color: #d3b54f; /* Warna saat hover */
            transform: translateY(-2px);
        }
        .back-home-button:active {
            transform: translateY(0);
        }
        .container {
            background-color: #fff;
            display: flex;
            max-width: 900px;
            border: 8px solid rgba(223, 216, 159, 0.63); /* Border dengan warna rgba */
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .image-container {
            flex: 1;
            background-color: rgba(223, 216, 159, 0.63); /* Background gambar */
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .image-container img {
            width: 100%;
            max-width: 250px;
            border: 8px solid rgba(223, 216, 159, 0.63); /* Border gambar */
            border-radius: 8px;
        }
        .text-container {
            flex: 2;
            padding: 20px;
        }
        .text-container h2 {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            color: #5d2e2e;
            margin-bottom: 15px;
            text-transform: uppercase;
        }
        .text-container p {
            font-size: 16px;
            color: #6e4e4e;
            line-height: 1.8;
            margin-bottom: 15px;
        }
        .text-container .quote {
            font-size: 18px;
            font-weight: bold;
            color: #5d2e2e;
            text-align: center;
            margin-top: 20px;
            border-top: 2px solid rgba(223, 216, 159, 0.63); /* Garis atas untuk quote */
            padding-top: 10px;
        }
    </style>
</head>
<body>
    <!-- Button Back to Home -->
    <div class="button-container">
    <a href="/home" class="back-home-button">Back to Home</a>
</div>
    
    <!-- About Me Section -->
    <div class="container" id="about-me">
        <div class="image-container">
            <img src="/images/dedep.jpg" alt="Devin">
        </div>
        <div class="text-container">
            <h2>ABOUT ME</h2>
            <p>
                Hi, I'm Devin, the proud owner of D'SeatCraft, where we bring comfort and style to your living spaces. With over 4 years of experience in selecting the perfect chairs, my mission is to create an environment that reflects your personal taste and enhances the way you live.
            </p>
            <p>
                Whether you're furnishing your home, office, or special gathering spaces, I specialize in curating a collection that blends functionality, elegance, and comfort. My goal is to help you find chairs that make your spaces feel inviting, stylish, and truly yours.
            </p>
            <p class="quote">
                EVERY CHAIR IS A CANVAS, AND EVERY CHOICE TELLS A STORY OF COMFORT AND STYLE.
            </p>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\octowbersdesignstd\resources\views/about-me.blade.php ENDPATH**/ ?>