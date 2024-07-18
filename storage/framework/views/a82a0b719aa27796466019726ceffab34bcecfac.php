<?php $__env->startSection('main-section'); ?>
    <div class="container">
        <div class="container-fluid">
            <div class="mt-4 ">
                <h2><?php echo e($pro->title ?? ''); ?> Галерея</h2>
                <div aria-label="breadcrumb mt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">Галерея</li>
                        <li class="breadcrumb-item active">Список</li>
                        <?php if(!empty($id)): ?>
                            <div class="d-flex ms-auto">
                                <form action="<?php echo e(route('set_gallary', $id)); ?>" method="post"
                                    enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    
                                    <div class="input-group">
                                        <input type="file" class="form-control" name="gallary[]" multiple>
                                        <button class="btn btn-primary" type="submit">Добавить</button>
                                    </div>
                                    <div class="text-danger">
                                        <?php $__errorArgs = ['gallary[]'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <?php echo e($message); ?>

                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>

                                </form>
                            </div>
                        <?php endif; ?>
                    </ol>
                </div>
            </div>
            <div class="<?php echo e(session()->get('msgst') ? 'alert  alert-' . session()->get('msgst') : 'm-0 border-0 p-0'); ?>">
                <?php echo e(session()->get('msg') ?? null); ?>

            </div>
            <div class="mt-4">
                <table class="table table-hover table-striped" id="data">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Изображение</th>
                            <th scope="col">Недвижимость</th>
                            <th scope="col">Действие</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $gal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <th scope="row"><?php echo e($item->id); ?></th>
                                <th scope="row"><img height="100rem" class="rounded"
                                        style="cursor: pointer"
                                        src="<?php echo e(asset('/storage/gallary/' . $item->pro_id . '/' . $item->gal_image)); ?>"
                                        data-fancybox="gallery"
                                        data-src="<?php echo e(asset('/storage/gallary/' . $item->pro_id . '/' . $item->gal_image)); ?>"
                                        alt="Error"></th>
                                <th scope="row"><?php echo e($item->Property->title); ?></th>
                                <th scope="row">
                                    <a class="btn btn-danger btn-sm" onclick="return confirm('Sure to delete?')"
                                        href="<?php echo e(route('del_gallary', [$item->pro_id, $item->id])); ?>">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </a>
                                </th>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <th colspan="4" class="text-center">Пусто</th>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script>
        $(document).ready(function() {
            $('.alert').fadeOut(3000);
            Fancybox.bind("gallery", {});
            // const myCarousel = new Carousel(document.querySelector(".carousel"), {});
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('AdminPanel.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\r\resources\views/AdminPanel/gallary/list.blade.php ENDPATH**/ ?>