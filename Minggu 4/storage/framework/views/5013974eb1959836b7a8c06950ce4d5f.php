<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>
    
    <link rel="stylesheet" href="<?php echo e(asset('frontend_dashboard/assets/css/main/app.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend_dashboard/assets/css/main/app-dark.css')); ?>">
    <link rel="shortcut icon" href="<?php echo e(asset('frontend_dashboard/assets/images/logo/favicon.svg')); ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo e(asset('frontend_dashboard/assets/images/logo/favicon.png')); ?>" type="image/png">
    
<link rel="stylesheet" href="<?php echo e(asset('frontend_dashboard/assets/css/shared/iconly.css')); ?>">

</head>
<body>
    <div id="app">
        <?php echo $__env->make('frontend_2/layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <script src="<?php echo e(asset('frontend_dashboard/assets/js/bootstrap.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend_dashboard/assets/js/app.js')); ?>"></script>
    
<!-- Need: Apexcharts -->
<script src="<?php echo e(asset('frontend_dashboard/assets/extensions/apexcharts/apexcharts.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend_dashboard/assets/js/pages/dashboard.js')); ?>"></script>

</body>

</html>
<?php /**PATH F:\Project\Project smt 4\Workshop_Website\Minggu 4\resources\views/frontend_2/layouts/dashboard.blade.php ENDPATH**/ ?>