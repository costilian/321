<?php $__env->startSection('main-section'); ?>
    <div class="container">
        <div class="container-fluid">
            <div class="mt-4 ">
                <h2>Категории</h2>
                <div aria-label="breadcrumb mt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">Категории</li>
                        <li class="breadcrumb-item active"><?php if(!empty($cate)): ?>Редактирование <?php else: ?> Добавить <?php endif; ?></li>
                        <div class="d-flex ms-auto">
                            <a class="btn btn-primary disabled" href="<?php echo e(route('add_category')); ?>">Добавить</a>
                        </div>
                    </ol>
                </div>
            </div>
            
            <div class="mt-4">
                <div class="card" style="width:90%;">
                    <div class="card-header">
                        <h4 class=""><?php if(!empty($cate)): ?>Редактировать <?php else: ?> Добавить <?php endif; ?> Категорию</h4>
                    </div>
                    <div class="card-body">
                        <form class="row g-3" action="<?php if(!empty($cate)): ?><?php echo e(route('category_edited', $cate->id)); ?><?php else: ?><?php echo e(route('category_added')); ?><?php endif; ?>" method="POST"
                            enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <div class="col">

                                <div class="col-md-12 mb-2">
                                    <label for="" class="form-label">Название категории</label>
                                    <input type="text" class="form-control" name="name" value="<?php if(!empty($cate)): ?><?php echo e($cate->name); ?><?php else: ?><?php echo e(old('name')); ?><?php endif; ?>"
                                        required>
                                    <div class="text-danger">* <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></div>
                                </div>
                                <div class="col-md-12">
                                    <label for="" class="form-label">Изображение категории</label>
                                    <p class="text-muted form-label">Для лучшего качества загружайте изображение в формате [400 x 225]</p>
                                    <div class="input-group">
                                        <input type="file" class="form-control" name="image" id=""
                                            <?php if(empty($cate)): ?>required <?php endif; ?>>
                                    </div>
                                    <div class="text-danger mt-0">* <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></div>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <?php if(!empty($cate)): ?>
                                    <label for="" class="form-label">Старое изображение</label>
                                    <img class="form-control" src="<?php echo e(asset('/storage/images/' . $cate->image)); ?>"
                                        alt="Error">
                                <?php endif; ?>
                            </div>
                            <div class="col-12">
                                <button class="btn <?php if(!empty($cate)): ?> btn-success <?php else: ?> btn-primary <?php endif; ?>" type="submit"><?php if(!empty($cate)): ?> Обновить <?php else: ?> Подтвердить <?php endif; ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('AdminPanel.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\r\resources\views/AdminPanel/category/form.blade.php ENDPATH**/ ?>