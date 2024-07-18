<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <?php $__currentLoopData = $featuredPro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="<?php echo e($key); ?>"
                aria-label="Slide <?php echo e($key + 1); ?>"
                <?php if($key == 0): ?> class="active" aria-current="true" <?php endif; ?>></button>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    </div>
    <div class="carousel-inner">
        <?php $__currentLoopData = $featuredPro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="carousel-item <?php if($key == 0): ?> active <?php endif; ?>">
                <img class="bd-placeholder-img"
                    src="<?php echo e($item->fe_image ? asset('/storage/property/' . $item->fe_image) : asset('/storage/property/' . $item->image)); ?>"
                    alt="<?php echo e($item->title); ?>">
                <div class="container">
                    <div class="carousel-caption <?php if($key % 2 == 0): ?> text-start <?php else: ?> text-end <?php endif; ?>">
                        <h1 style="text-shadow: 3px 3px 3px black;"><?php echo e($item->title); ?></h1>
                        <p>
                            <a class="btn btn-sm btn-primary" href="<?php echo e(route('show_purpose', $item->purpose)); ?>">
                                <?php echo e(ucfirst($item->purpose)); ?>

                            </a>
                            <a class="btn btn-sm btn-secondary"
                                href="<?php echo e(route('show_category', $item->Cate->slug_name)); ?>">
                                <?php echo e($item->Cate->name); ?>

                            </a>
                            <a class="btn btn-sm btn-dark" href="<?php echo e(route('show_city', $item->City->slug_city)); ?>">
                                <?php echo e($item->City->city); ?>

                            </a>
                        </p>
                        <p><a class="btn btn-lg btn-primary" href="<?php echo e(route('show_pro', $item->title_slug)); ?>">Подробнее </a></p>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Предыдущее</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Следующие</span>
    </button>
</div>
<?php /**PATH C:\OSPanel\domains\r\resources\views/layouts/carousel.blade.php ENDPATH**/ ?>