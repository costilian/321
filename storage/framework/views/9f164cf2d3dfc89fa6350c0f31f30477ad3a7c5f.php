<?php $__currentLoopData = config('dz.admin.global.js'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <script type="text/javascript" crossorigin="anonymous" src="<?php echo e($item); ?>"></script>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php echo $__env->yieldContent('scripts'); ?>

</body>

</html>
<?php /**PATH C:\OSPanel\domains\r\resources\views/AdminPanel/layouts/end.blade.php ENDPATH**/ ?>