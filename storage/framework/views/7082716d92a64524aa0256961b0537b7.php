<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results - D'SeatCraft</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f4f4;
            color: #333;
        }
        .container {
            text-align: center;
            padding: 2rem;
        }
        h1 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        p {
            font-size: 1rem;
            margin-bottom: 2rem;
        }
        a {
            text-decoration: none;
            background-color: rgba(223, 216, 159, 0.63);
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }
        a:hover {
            background-color: rgba(51, 28, 9, 0.64);
        }

        /* Card Container */
        .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            padding: 2rem;
            margin-top: 2rem;
        }
        .card {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
        }
        .card img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }
        .card .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(0, 0, 0, 0.4); /* Background gelap transparan */
            color: white;
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            font-weight: bold;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .card:hover .overlay {
            opacity: 1;
        }

        /* Modal Styles */
        .modal {
            display: none; /* Hidden by default */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8); /* Background overlay */
            align-items: center;
            justify-content: center;
            z-index: 1000;
        }
        .modal img {
            max-width: 80%;
            max-height: 80%;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(255, 255, 255, 0.8);
        }
        .modal-close {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: white;
            color: black;
            border: none;
            font-size: 1.5rem;
            padding: 10px;
            border-radius: 50%;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .modal-close:hover {
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to the Results Page!</h1>
        <p>Here, you'll find the results of our craftsmanship. Take a look and be inspired!</p>
        <a href="/">Go Back to Home</a>
    </div>

    <!-- Card Section -->
    <div class="card-container">
        <!-- Card 1 -->
        <div class="card" onclick="openModal('/images/look1.jpg')">
            <img src="/images/look1.jpg" alt="look1.jpg">
            <div class="overlay">1</div>
        </div>
        <!-- Card 2 -->
        <div class="card" onclick="openModal('/images/look2.jpg')">
            <img src="/images/look22.jpg" alt="look22.jpg">
            <div class="overlay">2</div>
        </div>
        <!-- Card 3 -->
        <div class="card" onclick="openModal('/images/look3.jpg')">
            <img src="/images/look3.jpg" alt="look3.jpg">
            <div class="overlay">3</div>
        </div>
        <!-- Card 4 -->
        <div class="card" onclick="openModal('/images/look4.jpg')">
            <img src="/images/look4.jpg" alt="look4.jpg">
            <div class="overlay">4</div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal" id="imageModal">
        <button class="modal-close" onclick="closeModal()">×</button>
        <img id="modalImage" src="" alt="Modal Image">
    </div>

    <script>
        // Open Modal Function
        function openModal(imageSrc) {
            const modal = document.getElementById('imageModal');
            const modalImage = document.getElementById('modalImage');
            modalImage.src = imageSrc;
            modal.style.display = 'flex';
        }

        // Close Modal Function
        function closeModal() {
            const modal = document.getElementById('imageModal');
            modal.style.display = 'none';
        }
    </script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\octowbersdesignstd\resources\views/results-page.blade.php ENDPATH**/ ?>