
    <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <p><?php echo e($user); ?></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <p>Нет пользователей</p>
    <?php endif; ?>
<?php /**PATH C:\OSPanel\home\prov.local\resources\views/user/29.blade.php ENDPATH**/ ?>