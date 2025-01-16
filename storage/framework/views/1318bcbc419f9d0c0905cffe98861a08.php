<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D'SeatCraft Shop</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <style>
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #f9f4f4;
            color: #333;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            background-color: #f9f4f4;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .navbar a {
            text-decoration: none;
            color: #333;
            margin: 0 1rem;
            font-size: 14px;
            text-transform: uppercase;
        }
        .navbar a:hover {
            text-decoration: underline;
        }
        h1 {
            font-family: 'Playfair Display', serif;
            font-size: 36px;
            text-align: center;
            margin: 2rem 0;
        }
        .collections {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        padding: 2rem;
        margin: 0 auto;
        max-width: 1200px;
    }

    .collections img {
        width: 100%;
        height: auto;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .collections .item {
        text-align: center;
        font-size: 16px;
        position: relative;
    }

    .collections .item p {
        margin-top: 10px;
        font-size: 14px;
        color: #555;
    }

    /* Gaya untuk tombol Add to Cart */
    .image-container {
        position: relative;
    }

    .add-to-cart {
        position: absolute;
        bottom: 10%;
        left: 50%;
        transform: translateX(-50%);
        background-color: rgba(97, 66, 8, 0.63);
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        opacity: 0;
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .image-container:hover .add-to-cart {
        opacity: 1;
        transform: translateX(-50%) translateY(-10%);
    }

    .image-container:hover img {
        filter: brightness(0.8);
    }
</style>

</head>
<body>
    <!-- Navigation Bar -->
    <div class="navbar">
        <a href="<?php echo e(url('/')); ?>">Home</a>
        <a href="<?php echo e(url('/about-me')); ?>">About Me</a>
    </div>

    <!-- Collections Section -->
<h1>Our Stunning Collections Shop</h1>
<div class="collections">
<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="item">
        <div class="card">
            <div class="image-container">
                <img src="<?php echo e(asset('storage/' .$product->image)); ?>" alt="<?php echo e($product->name); ?>">
            </div>
            <h3><?php echo e($product->name); ?></h3>
            <p>$<?php echo e(number_format($product->price, 2)); ?></p>
            <form action="" method="POST">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                <button type="submit" class="btn btn-primary">Add to Cart</button>
            </form>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
<?php /**PATH C:\xampp\htdocs\octowbersdesignstd\resources\views/collections.blade.php ENDPATH**/ ?>