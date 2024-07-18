<?php $__env->startSection('content_box'); ?>
    <div class="container">
        <div class="py-5">
            
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="card mb-3 p-0">
                        <div class="row">
                            <div class="col-4">
                                <img class="img-rounded" height="420" width="420"
                                    src="<?php echo e(!empty($user->Data->image) ? asset('/storage/userdata/' . $user->Data->image) : asset('stockUser.png')); ?>"
                                    alt="<?php echo e($user->name); ?>">
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="mb-3">
                                            <div class="col-12 mb-2">
                                                <h1 class="card-title"><?php echo e($user->name); ?></h1>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <h5 class="card-text"><?php echo e($user->email); ?></h5>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <h5 class="card-title">Обо мне :</h5>
                                            <p class="card-text h6"><?php echo e($user->Data->about ?? 'Вы ничего не указали'); ?>

                                            </p>
                                        </div>
                                        <div class="col-12 mt-auto mb-2">
                                            <a class="btn btn-outline-success" href="<?php echo e(route('editUserProfile')); ?>">
                                                <i class="fa fa-pencil" aria-hidden="true"></i> Редактировать профиль</a>
                                        </div>
                                        <div class="col-12 mt-auto mb-0">
                                            <a class="btn btn-outline-primary" href="<?php echo e(route('user_chng_password')); ?>">
                                                <i class="fas fa-key"></i> Изменить пароль</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\r\resources\views/User/Profile.blade.php ENDPATH**/ ?>