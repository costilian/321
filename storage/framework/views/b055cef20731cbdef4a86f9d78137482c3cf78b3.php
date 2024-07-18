<?php $__env->startSection('main-section'); ?>
    <div class="container">
        <div class="container-fluid">
            <div class="mt-4 ">
                <h2>Смена пароля</h2>
                <div aria-label="breadcrumb mt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">Пользователь с полными правами</li>
                        <li class="breadcrumb-item active">Смена пароля</li>
                    </ol>
                </div>
            </div>
            <div class="<?php echo e(session()->get('msgst') ? 'alert  alert-' . session()->get('msgst') : 'm-0 border-0 p-0'); ?>">
                <?php echo e(session()->get('msg') ?? null); ?></div>
            <div class="mt-4">
                <div class="card" style="width:90%;">
                    <div class="card-header">
                        <h4 class="">Смена пароля</h4>
                    </div>
                    <div class="card-body">
                        <form class="row g-3" action="<?php echo e(route('save_password')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="row m-auto mt-3">
                                <div class="col mb-2 mx-auto">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="" class="form-label">Старый пароль</label>
                                            <input type="password" class="form-control" name="old_password" required>
                                            <div class="text-danger">
                                                <?php $__errorArgs = ['old_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    * <?php echo e($message); ?>

                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="" class="form-label">Новый пароль</label>
                                            <input type="password" class="form-control" name="new_password" required>
                                            <div class="text-danger">
                                                <?php $__errorArgs = ['new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    * <?php echo e($message); ?>

                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="" class="form-label">Подтверждение нового пароя</label>
                                            <input type="password" class="form-control" name="new_password_confirmation" required>
                                            <div class="text-danger">
                                                <?php $__errorArgs = ['new_password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    * <?php echo e($message); ?>

                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if(session()->get('AdminUser')['type'] == 'R'): ?>
                                        <div class="col-12 mb-3">
                                            <button class="btn btn-success" type="submit">Сменить</button>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('AdminPanel.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\r\resources\views/AdminPanel/chng_password/form.blade.php ENDPATH**/ ?>