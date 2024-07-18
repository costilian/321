<?php $__env->startSection('main-section'); ?>
    <div class="container">
        <div class="container-fluid">
            <div class="mt-4">
                <h2>Админ - панель</h2>
                <div aria-label="breadcrumb mt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">Администратор</li>
                        <li class="breadcrumb-item active">Панель</li>
                        
                    </ol>
                </div>
            </div>
            <div class="<?php echo e(session()->get('msgst') ? 'alert  alert-' . session()->get('msgst') : 'm-0 border-0 p-0'); ?>">
                <?php echo e(session()->get('msg') ?? null); ?></div>
            <div class="mt-4">
                <div class="row mb-3">
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header bg-primary">
                                <h4>Пользователей +<?php echo e($newUsers->count()); ?></h4>
                            </div>
                            <div class="card-body bg-primary bg-gradient bg-opacity-75 text-dark">
                                <p class="m-0">Новых пользователей в этом месяце
                                    <a class="stretched-link link-dark" href="<?php echo e(route('list_users')); ?>">
                                        подробнее
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card rounded">
                            <div class="card-header bg-success">
                                <h4>Комментарии +<?php echo e($newReviews->count()); ?></h4>
                            </div>
                            <div class="card-body bg-success bg-gradient bg-opacity-75 text-dark">
                                <p class="m-0">Новых комментариев в этом месяце
                                    <a class="stretched-link link-dark" href="<?php echo e(route('list_reviews')); ?>">
                                        подробнее
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header bg-warning">
                                <h4>Недвижимость +<?php echo e($newProperty->count()); ?></h4>
                            </div>
                            <div class="card-body bg-warning bg-gradient bg-opacity-75 text-dark">
                                <p class="m-0">Новой недвижимости в этом месяце
                                    <a class="stretched-link link-dark" href="<?php echo e(route('list_properties')); ?>">
                                        подробнее
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
                <div class="row mb-3">
                    <h4>Подробнее</h4>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex">
                                    <h5>Пользователи</h5>
                                    <a class="ms-auto btn btn-sm btn-outline-primary" href="<?php echo e(route('list_users')); ?>">
                                        +</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <?php $__empty_1 = true; $__currentLoopData = $newUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $User): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <?php if($loop->index < 6): ?>
                                            <div class="col-3 mb-2">
                                                <img class="rounded-circle"
                                                    src="<?php echo e(!empty($User->Data->image) ? asset('/storage/userdata/' . $User->Data->image) : asset('stockUser.png')); ?>"
                                                    width="60px" alt="No Img">
                                            </div>
                                            <div class="col-9 mb-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="w-100">
                                                        <div class="fs-6"><?php echo e($User->name); ?></div>
                                                        <a class="text-muted"
                                                            href="mailto:<?php echo e($User->email); ?>"><?php echo e($User->email); ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <div class="col-12">
                                            <h6>Нет новых пользователей в этом месяце :/</h6>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex">
                                    <h5>Комментарии</h5>
                                    <a class="ms-auto btn btn-sm btn-outline-success" href="<?php echo e(route('list_reviews')); ?>">
                                        +</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <?php $__empty_1 = true; $__currentLoopData = $newReviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <?php if($loop->index < 6): ?>
                                            <div class="col-3 text-center mb-2">
                                                <img class="rounded-circle"
                                                    src="<?php echo e(!empty($review->Users[0]->Data->image)? asset('/storage/userdata/' . $review->Users[0]->Data->image): asset('stockUser.png')); ?>"
                                                    width="60px" alt="No Img">
                                            </div>
                                            <div class="col-9 mb-2">
                                                <div class="fs-6"><?php echo e($review->Users[0]->name); ?></div>
                                                <?php echo e($review->review); ?>

                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <div class="col-12">
                                            <h6>Комментариев нет :/</h6>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex">
                                    <h5>Недвижимость</h5>
                                    <a class="ms-auto btn btn-sm btn-outline-warning"
                                        href="<?php echo e(route('list_properties')); ?>">
                                        +</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <?php $__empty_1 = true; $__currentLoopData = $newProperty; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <?php if($loop->index < 6): ?>
                                            <div class="col-3 mb-2">
                                                <img width="60px" class="rounded-circle"
                                                    src="<?php echo e(asset('/storage/property/' . $property->image)); ?>"
                                                    alt="Error">
                                            </div>
                                            <div class="col-9 mb-2">
                                                <div class="fs-6"><?php echo e($property->title); ?></div>
                                                <a class="text-muted"
                                                    href="<?php echo e(route('edit_properties', $property->id)); ?>">Подробнее</a>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <div class="col-12">
                                            <h6>Недвижимости нет :/</h6>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('AdminPanel.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\r\resources\views/AdminPanel/dashboard/dashboard.blade.php ENDPATH**/ ?>