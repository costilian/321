<?php $__env->startSection('main-section'); ?>
    <div class="container">
        <div class="container-fluid">
            <div class="mt-4 ">
                <h2>Категории</h2>
                <div aria-label="breadcrumb mt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">Категории</li>
                        <li class="breadcrumb-item active">Список</li>
                        <div class="d-flex ms-auto">
                            <a class="btn btn-primary" href="<?php echo e(route('add_category')); ?>">Добавить</a>
                        </div>
                    </ol>
                </div>
            </div>
            <div class="<?php echo e(session()->get('msgst') ? 'alert  alert-' . session()->get('msgst') : 'm-0 border-0 p-0'); ?>">
                <?php echo e(session()->get('msg') ?? null); ?></div>
            
            <div class="mt-4">
                <table class="table table-hover table-striped" id="data">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Название категории</th>
                            <th scope="col">Изображение</th>
                            <th scope="col">Действие</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th scope="row"><?php echo e($item->id); ?></th>
                                <th scope="row"><?php echo e($item->name); ?></th>
                                <th scope="row"><img height="40rem" class="rounded" style="cursor: pointer"
                                        data-fancybox="gallery" data-src="<?php echo e(asset('/storage/images/' . $item->image)); ?>"
                                        src="<?php echo e(asset('/storage/images/' . $item->image)); ?>" alt="Ошибка"></th>
                                <th scope="row">
                                    <a class="btn btn-success btn-sm" href="<?php echo e(route('edit_category', $item->id)); ?>"><i
                                            class="fa fa-edit" aria-hidden="true"></i></a>
                                    <?php if(session()->get('AdminUser')['type'] == 'R'): ?>
                                        <a class="btn btn-danger btn-sm" onclick="return confirm('Sure to delete?')"
                                            href="<?php echo e(route('del_category', $item->id)); ?>"><i class="fa fa-trash"
                                                aria-hidden="true"></i></a>
                                    <?php endif; ?>
                                </th>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script>
        $(document).ready(function() {
            $('.alert').fadeOut(3000);
            Fancybox.bind("gallery", {});
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('AdminPanel.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\r\resources\views/AdminPanel/category/list.blade.php ENDPATH**/ ?>