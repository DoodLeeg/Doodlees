
    <?php $__currentLoopData = $numbers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $num): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($loop->remaining < 3): ?>
            <i><?php echo e($num); ?></i><br>
        <?php else: ?>
            <b><?php echo e($num); ?></b><br>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\OSPanel\home\prov.local\resources\views/user/33.blade.php ENDPATH**/ ?>