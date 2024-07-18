<?php $__env->startPush('title'); ?>
    <?php echo e($CMS['home_title'] ?? ''); ?>

<?php $__env->stopPush(); ?>
<?php $__env->startPush('meta'); ?>
    <?php echo e($CMS['home_meta'] ?? ''); ?>

<?php $__env->stopPush(); ?>
<?php $__env->startSection('content_box'); ?>
    <main>
        <?php echo $__env->make('layouts.carousel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="container marketing">

            <!-- Three columns of text below the carousel -->

            <div class="row">
                <div class="col-12 mb-5 text-center">
                    <h1>Категории</h1>
                </div>
                <div id="cat_cara" class="carousel">
                    <?php $__empty_1 = true; $__currentLoopData = $showcate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="carousel__slide" style="width: 350px">
                            
                            <div class="shadow w-100 mx-auto">
                                <a class="" href="<?php echo e(route('show_category', $item->slug_name)); ?>">
                                    <img style="height: 100%" class="w-100 rounded-top"
                                        src="<?php echo e(asset('/storage/images/' . $item->image)); ?>" alt="<?php echo e($item->name); ?>">
                                </a>
                                <a class="btn btn-outline-primary rounded-bottom btn-lg w-100"
                                    href="<?php echo e(route('show_category', $item->slug_name)); ?>"><?php echo e($item->name); ?></a>
                            </div>
                            
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="carousel__slide" style="width: 350px">
                        <div class="shadow w-100 mx-auto">
                            
                            <a class="btn btn-outline-primary rounded-bottom btn-lg w-100"
                                href="">Нет</a>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div><!-- /.row -->

            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            <div class="row featurette">
                <?php if(!empty($CMS['home_image'])): ?>
                    <div class="col-md-5">
                        <img width="500px" class="h-auto" src="<?php echo e(asset('/storage/cms/' . $CMS['home_image'])); ?>"
                            alt="Error">
                    </div>
                <?php endif; ?>
                <?php if(!empty($CMS['home_image'])): ?>
                    <div class="col-md-12 d-flex align-items-center">
                        <div class="text-center w-100" style="text-align: justify">
                            <?php echo $CMS['home_content']; ?>

                        </div>
                    </div>
                <?php else: ?>
                    <div class="col-md-7 d-flex align-items-center">
                        <div class="w-100" style="text-align: justify">
                            <?php echo $CMS['home_content'] ?? ''; ?>

                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <hr class="featurette-divider">
            <div class="row featurette mb-3">
                <div class="col-12">
                    <h1>Недавно добавленные</h1>
                </div>
            </div>
            <div class="row featurette">
                <?php $__empty_1 = true; $__currentLoopData = $newlyAdded; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="col-4 mb-4">
                        <div class="card mx-auto shadow">
                            <a href="<?php echo e(route('show_pro', $item->title_slug)); ?>">
                                <img height="300px" class="card-img-top"
                                    src="<?php echo e(asset('/storage/property/' . $item->image)); ?>" alt="<?php echo e($item->title); ?>">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title mb-1"><?php echo e($item->title); ?></h4>
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
                                <p class="card-text">
                                    <i class="fas fa-bed"></i> <?php echo e($item->rooms); ?>

                                    <i class="fas fa-shower"></i> <?php echo e($item->bathrooms); ?>

                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    
                    <h4>В последнее время ничего нового не добавлено...</h4>
                    
                <?php endif; ?>
            </div>

            <?php $__empty_1 = true; $__currentLoopData = $catedata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <?php if(sizeof($cate->Pro) > 0): ?>
                    <hr class="featurette-divider">
                    <div class="row featurette mb-3">
                        <div class="col-12">
                            <a class="text-decoration-none text-secondary" href="">
                                <h1 class="">
                                    <?php echo e($cate->name); ?>

                                </h1>
                            </a>
                        </div>
                    </div>
                    <div class="row featurette">
                        <?php $__currentLoopData = $cate->Pro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-4 mb-4">
                                <div class="card mx-auto shadow">
                                    <a href="<?php echo e(route('show_pro', $item->title_slug)); ?>">
                                        <img height="300px" class="card-img-top"
                                            src="<?php echo e(asset('/storage/property/' . $item->image)); ?>"
                                            alt="<?php echo e($item->title); ?>">
                                    </a>
                                    <div class="card-body">
                                        <h4 class="card-title mb-1"><?php echo e($item->title); ?></h4>
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
                                        <p class="card-text">
                                            <i class="fas fa-bed"></i> <?php echo e($item->rooms); ?>

                                            <i class="fas fa-shower"></i> <?php echo e($item->bathrooms); ?>

                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <?php endif; ?>

            

            

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->
        </div>
    </main>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script>
        $(document).ready(function() {
            const myCarousel = new Carousel(document.querySelector("#cat_cara"), {});
            // $(document).('.carousal__button').addClass(' text-white shadow-lg');
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\r\resources\views/frontend/home.blade.php ENDPATH**/ ?>