<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <header>
        <h1>Welcome to Admin Dashboard</h1>
    </header>
    <main>
        <h2>Welcome, <?php echo e(auth()->user()->name); ?></h2>
        <p>Today is <?php echo e(now()->toFormattedDateString()); ?></p>
        
        <h3>Registered Users</h3>
        <ul>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($user->name); ?> (<?php echo e($user->email); ?>)</li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </main>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\octowbersdesignstd\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>