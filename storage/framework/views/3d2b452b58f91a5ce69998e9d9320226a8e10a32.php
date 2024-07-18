<?php $__env->startSection('content_box'); ?>
    <div class="container">
        <div class="py-5">
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="card mb-3 p-0">
                        <div class="card-header">
                            <h3>Смена пароля</h3>
                        </div>
                        <form class="row" action="<?php echo e(route('user_save_password')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="col-8">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="mb-3">
                                            <div class="col-12 mb-2">
                                                <label class="form-label h6" for="">Старый пароль</label>
                                                <input class="form-control" name="old_password" type="password"
                                                    placeholder="Введите старый пароль">
                                                <?php $__errorArgs = ['old_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <div class="text-danger"><?php echo e($message); ?></div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 mb-2">
                                                    <label class="form-label h6" for="">Смена пароля</label>
                                                    <input class="form-control" name="new_password" type="password"
                                                        placeholder="Введите новый пароль">
                                                    <?php $__errorArgs = ['new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <div class="text-danger"><?php echo e($message); ?></div>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                                <div class="col-6 mb-2">
                                                    <label class="form-label h6" for="">Подтвердить новый пароль</label>
                                                    <input class="form-control" name="new_password_confirmation"
                                                        type="password" placeholder="Введите снова новый пароль">
                                                    <?php $__errorArgs = ['new_password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <div class="text-danger"><?php echo e($message); ?></div>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <button type="submit" class="btn btn-success"
                                                href="<?php echo e(route('editUserProfile')); ?>">
                                                <i class="fa fa-floppy-o" aria-hidden="true"></i> Сменить пароль</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\r\resources\views/User/chngPassword.blade.php ENDPATH**/ ?>