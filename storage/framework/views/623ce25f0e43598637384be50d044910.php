<header class="bg-blue-600 text-white py-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-2xl font-bold">Admin Dashboard</h1>
        <nav>
            <ul class="flex space-x-4">
                <li>
                    <a href="/dashboard" class="text-white hover:text-gray-200">Dashboard</a>
                </li>
                <li>
                    <a href="<?php echo e(route('products.index')); ?>" class="text-white hover:text-gray-200">Products</a>
                </li>
            </ul>
        </nav>
            <a href="<?php echo e(route('logout')); ?>" type="submit" class="btn bg-red-500 px-4 py-2 rounded-md text-white font-medium hover:bg-red-600">
                Logout
            </a>
    </div>
</header>
<?php /**PATH C:\xampp\htdocs\octowbersdesignstd\resources\views/partials/header.blade.php ENDPATH**/ ?>