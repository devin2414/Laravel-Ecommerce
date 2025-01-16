<?php $__env->startSection('content'); ?>
    <main class="container mx-auto px-6 py-8">
            <h2 class="text-xl font-semibold mb-4">Welcome, <?php echo e(auth()->user()->name); ?></h2>
            <p class="text-gray-600">Today is <?php echo e(now()->toFormattedDateString()); ?></p> 
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.admin", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\octowbersdesignstd\resources\views/dashboard.blade.php ENDPATH**/ ?>