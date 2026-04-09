
    <ul>
        <?php $__currentLoopData = $strings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>Ключ: <?php echo e($key + 1); ?>, Значение: <?php echo e($value); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php /**PATH C:\OSPanel\home\prov.local\resources\views/user/23.blade.php ENDPATH**/ ?>