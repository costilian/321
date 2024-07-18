<?php $__env->startPush('title'); ?>
    <?php echo e($CMS['about_title']); ?>

<?php $__env->stopPush(); ?>
<?php $__env->startPush('meta'); ?>
    <?php echo e($CMS['about_meta']); ?>

<?php $__env->stopPush(); ?>
<?php $__env->startSection('content_box'); ?>
    <div class="container">
        <div class="py-5">
            <div class="row">
                <?php if(!empty($CMS['about_image'])): ?>
                    <div class="col-md-5">
                        <img width="500px" class="h-auto mb-2" src="<?php echo e(asset('/storage/cms/' . $CMS['about_image'])); ?>"
                            alt="Error">
                    </div>
                <?php endif; ?>
                <?php if(empty($CMS['about_image'])): ?>
                    <div class="col-md-12" style="text-align: justify">
                        <?php echo $CMS['about_content']; ?>

                    </div>
                <?php else: ?>
                    <div class="col-md-7" style="text-align: justify">
                        <?php echo $CMS['about_content']; ?>

                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\r\resources\views/frontend/about.blade.php ENDPATH**/ ?>