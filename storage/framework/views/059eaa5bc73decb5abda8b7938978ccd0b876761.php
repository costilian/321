<div class="row">
    <?php echo e($show->links()); ?>

</div>
<div class="row">
    <?php $__empty_1 = true; $__currentLoopData = $show; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="col-12 mb-2">
            <div class="card mb-3 p-0">
                <div class="row g-0">
                    <div class="col-md-4">
                        <a href="<?php echo e(route('show_pro', $item->title_slug)); ?>">
                            <img class="img-fluid rounded-start w-100 h-100" style=""
                                src="<?php echo e(asset('/storage/property/' . $item->image)); ?>" alt="<?php echo e($item->title); ?>">
                        </a>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 mb-2">
                                    <a class="btn p-0 text-secondary"
                                        href="<?php echo e(route('show_pro', $item->title_slug)); ?>">
                                        <h2 class="card-title"><?php echo e($item->title); ?></h2>
                                    </a>
                                </div>
                                <div class="col-12 mb-2">
                                    <p class="card-text mb-1">
                                        <a class="btn btn-sm btn-outline-primary"
                                            href="<?php echo e(route('show_purpose', $item->purpose)); ?>">
                                            <?php echo e(ucfirst($item->purpose)); ?>

                                        </a>
                                        <a class="btn btn-sm btn-outline-secondary"
                                            href="<?php echo e(route('show_category', $item->Cate->slug_name)); ?>">
                                            <?php echo e($item->Cate->name); ?>

                                        </a>
                                        <a class="btn btn-sm btn-outline-dark"
                                            href="<?php echo e(route('show_city', $item->City->slug_city)); ?>">
                                            <?php echo e($item->City->city); ?>

                                        </a>
                                    </p>
                                </div>
                                <div class="col-12 mb-2">
                                    <p class="card-text"><?php echo e($item->description); ?></p>
                                </div>
                                <div class="col-12 mb-2">
                                    <p class="card-text">
                                        <i class="fas fa-bed"></i> <?php echo e($item->rooms); ?>

                                        <i class="fas fa-shower"></i> <?php echo e($item->bathrooms); ?>

                                    </p>
                                </div>
                                <div class="col-12 mt-4 mb-2">
                                    <a class="btn btn-primary" href="<?php echo e(route('show_pro', $item->title_slug)); ?>">
                                        <i class="fab fa-readme" aria-hidden="true"></i> Подробнее
                                    </a>
                                    <?php if($status): ?>
                                        <a class="btn
                                                <?php if(!empty($saved)): ?> <?php if(in_array($item->title_slug, $saved)): ?> btn-success
                                                <?php else: ?>
                                                btn-outline-success <?php endif; ?>
                                                <?php else: ?>
                                                btn-outline-success
                                                <?php endif; ?>
                                                save_pro"
                                            href="<?php echo e(route('save_pro_ajax', [$item->title_slug, $item->id])); ?>">
                                            <i class="fa fa-bookmark" aria-hidden="true"></i>
                                            <span class="save_pro_text">
                                                <?php if(!empty($saved)): ?>
                                                    <?php if(in_array($item->title_slug, $saved)): ?>
                                                        В закладках
                                                    <?php else: ?>
                                                        Сохранить
                                                    <?php endif; ?>
                                                <?php else: ?>
                                                    Сохранить
                                                <?php endif; ?>
                                            </span>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div class="col-12 mb-2">
            <div class="card mb-3 p-0">
                <h2 class="text-center my-5">Пусто</h2>
            </div>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH C:\OSPanel\domains\r\resources\views/frontend/showinitem.blade.php ENDPATH**/ ?>