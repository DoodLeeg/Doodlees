
    <ul>
        <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($emp['name']); ?> <?php echo e($emp['surname']); ?> – <?php echo e($emp['salary']); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php /**PATH C:\OSPanel\home\prov.local\resources\views/user/27.blade.php ENDPATH**/ ?>