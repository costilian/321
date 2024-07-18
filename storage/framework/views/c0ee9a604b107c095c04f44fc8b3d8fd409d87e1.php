<?php $__env->startSection('main-section'); ?>
    <div class="container">
        <div class="container-fluid">
            <div class="mt-4 ">
                <h2>Условия</h2>
                <div aria-label="breadcrumb mt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">Условия</li>
                        <li class="breadcrumb-item active"><?php if(!empty($faci)): ?>Редактировать <?php else: ?> Добавить <?php endif; ?></li>
                        <div class="d-flex ms-auto">
                            <a class="btn btn-primary disabled" href="<?php echo e(route('add_category')); ?>">Добавить</a>
                        </div>
                    </ol>
                </div>
            </div>
            <div class="mt-4">
                <div class="card" style="width:90%;">
                    <div class="card-header">
                        <h4 class=""><?php if(!empty($faci)): ?>Редактирование <?php else: ?> Добавление <?php endif; ?> Условия</h4>
                    </div>
                    <div class="card-body">
                        <form class="row g-3" action="<?php if(!empty($faci)): ?><?php echo e(route('facilities_edited', $faci->id)); ?><?php else: ?><?php echo e(route('facilities_added')); ?><?php endif; ?>" method="POST"
                            enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="col-md-8">
                                <label for="" class="form-label">Условия</label>
                                <input type="text" class="form-control" name="faci" value="<?php if(!empty($faci)): ?><?php echo e($faci->faci); ?><?php else: ?><?php echo e(old('faci')); ?><?php endif; ?>"
                                    required>
                                <div class="text-danger">* <?php $__errorArgs = ['faci'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></div>
                            </div>
                            <div class="col-md-5">
                                <label for="" class="form-label">Само условие</label>
                                <input type="text" class="form-control" name="fa" value="<?php if(!empty($faci)): ?><?php echo e($faci->fa); ?><?php else: ?><?php echo e(old('fa')); ?><?php endif; ?>">
                                <div class="text-danger"><?php $__errorArgs = ['fa'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> * <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></div>
                            </div>
                            <div class="col-md-3">
                                <label for="" class="form-label">Цвет</label>
                                <div class="input-group">
                                    <select class="form-select" name="color">
                                        <option <?php if(!empty($faci)): ?><?php echo e($faci->color == '' ? 'selected' : ''); ?><?php endif; ?> value="">Выбрать...</option>
                                        <option <?php if(!empty($faci)): ?><?php echo e($faci->color == 'primary' ? 'selected' : ''); ?><?php endif; ?> class="bg-primary" value="primary">Синий
                                        </option>
                                        <option <?php if(!empty($faci)): ?><?php echo e($faci->color == 'secondary' ? 'selected' : ''); ?><?php endif; ?> class="bg-secondary" value="secondary">Серый
                                        </option>
                                        <option <?php if(!empty($faci)): ?><?php echo e($faci->color == 'success' ? 'selected' : ''); ?><?php endif; ?> class="bg-success" value="success">Зеленный
                                        </option>
                                        <option <?php if(!empty($faci)): ?><?php echo e($faci->color == 'danger' ? 'selected' : ''); ?><?php endif; ?> class="bg-danger" value="danger">Красный</option>
                                        <option <?php if(!empty($faci)): ?><?php echo e($faci->color == 'warning' ? 'selected' : ''); ?><?php endif; ?> class="bg-warning" value="warning">Желтый
                                        </option>
                                        <option <?php if(!empty($faci)): ?><?php echo e($faci->color == 'info' ? 'selected' : ''); ?><?php endif; ?> class="bg-info" value="info">Голубоый
                                        </option>
                                        <option <?php if(!empty($faci)): ?><?php echo e($faci->color == 'light' ? 'selected' : ''); ?><?php endif; ?> class="bg-light" value="light">Белый
                                        </option>
                                        <option <?php if(!empty($faci)): ?><?php echo e($faci->color == 'dark' ? 'selected' : ''); ?><?php endif; ?> class="bg-dark text-white"
                                            value="dark">Субхан</option>
                                    </select>
                                </div>
                                <div class="text-danger">* <?php $__errorArgs = ['color'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></div>
                            </div>
                            <div class="col-12">
                                <button
                                    class="btn
                                <?php if(!empty($faci)): ?> btn-success
                                <?php else: ?> btn-primary
                                <?php endif; ?>"
                                    type="submit"><?php if(!empty($faci)): ?> Редактировать <?php else: ?> Добавить <?php endif; ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('AdminPanel.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\r\resources\views/AdminPanel/facilities/form.blade.php ENDPATH**/ ?>