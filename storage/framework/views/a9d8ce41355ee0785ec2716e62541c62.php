
    <style>
        .first { color: green; font-weight: bold; }
        .last  { color: red;  font-weight: bold; }
    </style>
    <ul>
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="<?php if($loop->first): ?> first <?php endif; ?> <?php if($loop->last): ?> last <?php endif; ?>">
                <?php echo e($loop->iteration); ?>: <?php echo e($item); ?>

            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php /**PATH C:\OSPanel\home\prov.local\resources\views/user/32.blade.php ENDPATH**/ ?>