<!-- resources/views/admin/products/create.blade.php -->


<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="my-4">Add New Product</h1>
    <div class="card">
        <div class="mx-4 my-4 card-title">form input</div>
        <div class="card-body">
            <form action="<?php echo e(route('products.store')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="mb-4">
                    <label for="name">Name</label>
                    <input type="text" name="name" required class="form-control">
                </div>
        
                <div class="mb-4">
                    <label for="price">Price</label>
                    <input type="number" name="price" required class="form-control">
                </div>
        
                <div class="mb-4">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control"></textarea>
                </div>
        
                <div class="mb-4">
                    <label for="stock">Stock</label>
                    <input type="number" name="stock" class="form-control">
                </div>
        
                <div class="mb-4">
                    <label for="image">Product Image</label>
                    <input type="file" name="image" accept="image/*" required class="form-control">
                </div>
        
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\octowbersdesignstd\resources\views/admin/products/create.blade.php ENDPATH**/ ?>