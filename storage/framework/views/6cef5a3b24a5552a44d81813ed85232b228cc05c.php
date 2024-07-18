<!DOCTYPE html>
<html lang="en">

<head>
    <?php if(!empty($logo_image->value)): ?>
        <link rel="icon" type="image/x-icon" href="<?php echo e(asset('/storage/siteSettings/' . $logo_image->value)); ?>">
    <?php else: ?>
        <link rel="icon" href="favicon.ico" type="image/x-icon">
    <?php endif; ?>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="<?php echo e($meta_discription->value ?? ''); ?>" />
    <title>
        <?php echo e($title ? $title : ''); ?> | Admin | <?php echo e($site_title->value ?? config('dz.admin.title')); ?>

        
    </title>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

    </style>

    <?php $__currentLoopData = config('dz.admin.global.css'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <link rel="stylesheet" crossorigin="anonymous" href="<?php echo e($item); ?>">
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</head>

<body>
<?php /**PATH C:\OSPanel\domains\r\resources\views/AdminPanel/layouts/start.blade.php ENDPATH**/ ?>