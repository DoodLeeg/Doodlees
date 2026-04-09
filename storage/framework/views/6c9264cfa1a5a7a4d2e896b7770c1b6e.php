
    <table border="1">
        <tr><th>Имя</th><th>Фамилия</th><th>Зарплата</th></tr>
        <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($emp['name']); ?></td>
            <td><?php echo e($emp['surname']); ?></td>
            <td><?php echo e($emp['salary']); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php /**PATH C:\OSPanel\home\prov.local\resources\views/user/28.blade.php ENDPATH**/ ?>