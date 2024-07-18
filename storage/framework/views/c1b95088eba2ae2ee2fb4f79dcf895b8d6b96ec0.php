<?php $__env->startPush('title'); ?>
    <?php echo e($CMS['faq_title']); ?>

<?php $__env->stopPush(); ?>
<?php $__env->startPush('meta'); ?>
    <?php echo e($CMS['faq_meta']); ?>

<?php $__env->stopPush(); ?>
<?php $__env->startSection('content_box'); ?>
    <div class="container">
        <div class="py-5">
            <div class="row">                
                <div class="col-md-12" style="text-align: justify">
                    <?php echo $CMS['faq_content']; ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\r\resources\views/frontend/faq.blade.php ENDPATH**/ ?>