<?php echo $__env->make('AdminPanel.layouts.start', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('AdminPanel.layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container-fluid">
    <div class="row">
        <?php echo $__env->make('AdminPanel.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <?php echo $__env->yieldContent('main-section'); ?>
        </main>
    </div>
</div>
<?php echo $__env->make('AdminPanel.layouts.end', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\OSPanel\domains\r\resources\views/AdminPanel/layouts/main.blade.php ENDPATH**/ ?>