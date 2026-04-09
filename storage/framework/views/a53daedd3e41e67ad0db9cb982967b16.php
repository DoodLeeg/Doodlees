
    <?php $__currentLoopData = $numbers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $num): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($num); ?>

        <?php if($num == 0): ?> <?php break; ?> <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\OSPanel\home\prov.local\resources\views/user/34.blade.php ENDPATH**/ ?>