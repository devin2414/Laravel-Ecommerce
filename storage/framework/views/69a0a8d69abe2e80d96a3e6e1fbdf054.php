

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="my-4">Products</h1>
    <div class="card">
        <div class="card-title my-4 mx-2"> Data Product</div>
        <div class="card-body">
            <a href="<?php echo e(route('products.create')); ?>" class="btn btn-success mb-3">Add New Product</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Gambar</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td>
                                <img src="<?php echo e(asset('storage/'. $product->image)); ?>" alt="" class="rounded" style="width: 50px; height: 50px;">
                            </td>
                            <td><?php echo e($product->name); ?></td>
                            <td><?php echo e($product->description); ?></td>
                            <td>$<?php echo e(number_format($product->price, 2)); ?></td>
                            <td>
                                <a href="<?php echo e(route('products.edit', $product->id)); ?>" class="btn btn-primary btn-sm">Edit</a>
                                <a href="<?php echo e(route('products.destroy', $product->id)); ?>" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\octowbersdesignstd\resources\views/admin/products/index.blade.php ENDPATH**/ ?>