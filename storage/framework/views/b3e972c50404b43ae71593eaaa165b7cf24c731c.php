<!DOCTYPE html>
<html lang="en">

<head>

    <?php if(!empty($logo_image->value)): ?>
        <link rel="icon" type="image/x-icon" href="<?php echo e(asset('/storage/siteSettings/' . $logo_image->value)); ?>">
    <?php else: ?>
        <link rel="icon" href="favicon.ico" type="image/x-icon">
    <?php endif; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo e($meta_discription->value ?? ''); ?><?php echo $__env->yieldPushContent('meta'); ?>" />
    <title>
        <?php echo $__env->yieldPushContent('title'); ?> |
        <?php echo e($title ? $title : ''); ?> | <?php echo e($site_title->value ?? config('dz.public.title')); ?>

        
    </title>

    <?php $__currentLoopData = config('dz.public.global.css'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <link rel="stylesheet" crossorigin="anonymous" href="<?php echo e($item); ?>">
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    
</head>

<body class="py-0">
<?php /**PATH C:\OSPanel\domains\r\resources\views/layouts/header.blade.php ENDPATH**/ ?>