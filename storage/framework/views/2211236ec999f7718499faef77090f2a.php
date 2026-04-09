
    <?php if(is_array($data)): ?>
        <ul>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($item); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php else: ?>
        <p><?php echo e($data); ?></p>
    <?php endif; ?>
<?php /**PATH C:\OSPanel\home\prov.local\resources\views/user/25.blade.php ENDPATH**/ ?>