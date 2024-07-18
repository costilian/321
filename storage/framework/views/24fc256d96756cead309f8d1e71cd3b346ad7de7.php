<?php $__env->startSection('main-section'); ?>
    <div class="container">
        <div class="container-fluid">
            <div class="mt-4 ">
                <h2>Города</h2>
                <div aria-label="breadcrumb mt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">Города</li>
                        <li class="breadcrumb-item active"><?php if(!empty($city)): ?>Изменение <?php else: ?> Добавление <?php endif; ?></li>
                        <div class="d-flex ms-auto">
                            <a class="btn btn-primary disabled" href="<?php echo e(route('add_category')); ?>">Добавить</a>
                        </div>
                    </ol>
                </div>
            </div>
            <div class="mt-4">
                <div class="card" style="width:90%;">
                    <div class="card-header">
                        <h4 class=""><?php if(!empty($city)): ?>Изменить <?php else: ?> Добавить <?php endif; ?> Город</h4>
                    </div>
                    <div class="card-body">
                        <form class="row g-3" action="<?php if(!empty($city)): ?><?php echo e(route('cities_edited', $city->id)); ?><?php else: ?><?php echo e(route('cities_added')); ?><?php endif; ?>" method="POST"
                            enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <div class="col">

                                <div class="col-md-8">
                                    <label for="" class="form-label">Название города</label>
                                    <input type="text" class="form-control" name="city" value="<?php if(!empty($city)): ?><?php echo e($city->city); ?><?php else: ?><?php echo e(old('city')); ?><?php endif; ?>"
                                        required>
                                    <div class="text-danger">* <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></div>
                                </div>
                                <div class="col-12">
                                    <label for="" class="form-label">Состояние города</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1" name="status"
                                            <?php if(!empty($city)): ?> <?php if($city->status == 1): ?> checked <?php endif; ?> <?php endif; ?>>
                                        <label class="form-check-label">
                                            Установите флажок, чтобы включить этот город
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn <?php if(!empty($city)): ?> btn-success <?php else: ?> btn-primary <?php endif; ?>" type="submit"><?php if(!empty($city)): ?> Изменить <?php else: ?> Подтвердить <?php endif; ?></button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('AdminPanel.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\r\resources\views/AdminPanel/cities/form.blade.php ENDPATH**/ ?>