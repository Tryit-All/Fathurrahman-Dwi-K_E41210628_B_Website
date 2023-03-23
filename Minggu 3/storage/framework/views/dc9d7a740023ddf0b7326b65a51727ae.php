

<?php $__env->startSection('content'); ?>
<div class="jumbotron jumbotron-fluide">
    <div class="container">
        <h1 class="display-4">This Home Page</h1>
        <p class="lead">Hello this is home page</p>
    </div>
    
    <p>Nama : <?php echo e($nama); ?></p>
    <p>Identitas</p>
    <ul>
        
        <?php $__currentLoopData = $dataDiri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($a); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Project\Project smt 4\Workshop_Website\Minggu 3\resources\views/home.blade.php ENDPATH**/ ?>