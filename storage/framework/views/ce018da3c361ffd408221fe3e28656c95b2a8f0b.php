<?php $__env->startSection('content_box'); ?>
    <div class="container">
        <div class="py-5">

            <div class="row">
                <div class="col-12 mb-3">
                    <div class="card mb-3 p-0">
                        <form class="row" action="<?php echo e(route('editedUserProfile')); ?>" method="POST"
                            enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="col-4">
                                <img id="pro-img" class="img-rounded" height="420" width="420"
                                    src="<?php echo e(!empty($user->Data->image) ? asset('/storage/userdata/' . $user->Data->image) : asset('stockUser.png')); ?>"
                                    alt="<?php echo e($user->name); ?>">
                                <div class="input-group w-100">
                                    <input class="form-control" name="image" type="file">
                                    <button class="btn btn-danger" id="rm-img"><i class="fa fa-trash"></i>
                                        Удалить</button>
                                </div>
                                <?php $__errorArgs = ['image'];
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
                            <div class="col-8">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="mb-3">
                                            <div class="col-12 mb-2">
                                                
                                                <label class="form-label h6" for="">Имя</label>
                                                <input class="form-control" name="name" type="text"
                                                    placeholder="Введите ваше имя" value="<?php echo e($user->name); ?>">
                                                <?php $__errorArgs = ['name'];
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
                                            <div class="col-12 mb-2">
                                                
                                                <label class="form-label h6" for="">Почта</label>
                                                <input class="form-control" name="email" type="email"
                                                    placeholder="Ваша новая почта" value="<?php echo e($user->email); ?>">
                                                <?php $__errorArgs = ['email'];
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
                                        <div class="col-12 mb-3">
                                            
                                            <label class="form-label h6" for="">Обо мне</label>
                                            <input class="form-control" name="about" type="text"
                                                placeholder="Расскажите о себе"
                                                value="<?php echo e($user->Data->about ?? ''); ?>">
                                            <?php $__errorArgs = ['about'];
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
                                        <div class="col-12 mt-auto mb-0">
                                            <button type="submit" class="btn btn-success"
                                                href="<?php echo e(route('editUserProfile')); ?>">
                                                <i class="fa fa-floppy-o" aria-hidden="true"></i> Сохранить изменения</button>
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
<?php $__env->startSection('scripts'); ?>
    <script>
        $(document).ready(function() {
            $(document).on('click', 'form #rm-img', function(e) {
                e.preventDefault();
                var def_img = "<?php echo e(asset('stockUser.png')); ?>";

                $.ajax({
                    type: "GET",
                    url: "<?php echo e(route('del_profile_img')); ?>",
                    success: function(response) {
                        if (response) {
                            $('#pro-img').attr('src', def_img);
                        }
                    }
                });

            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\r\resources\views/User/editProfile.blade.php ENDPATH**/ ?>