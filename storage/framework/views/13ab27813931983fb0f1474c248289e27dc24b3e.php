<?php $__env->startSection('main-section'); ?>
    <div class="container">
        <div class="container-fluid">
            <div class="mt-4 ">
                <h2><?php echo e($pro->title ?? ''); ?> Комментарии</h2>
                <div aria-label="breadcrumb mt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">Комментарии</li>
                        <li class="breadcrumb-item active">Список</li>
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
                            <th scope="col">Недвижимость</th>
                            <th scope="col">Пользователь</th>
                            <th scope="col">Комментарий</th>
                            <th scope="col">Действие</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <th scope="row"><?php echo e($item->id); ?></th>
                                <th scope="row"><?php echo e($item->Property->title); ?></th>
                                <th scope="row"><?php echo e($item->Users[0]->name); ?></th>
                                <th scope="row">
                                    <p><?php echo e($item->review); ?></p>
                                </th>
                                <th scope="row">
                                    <a class="btn btn-danger btn-sm" onclick="return confirm('Удалить?')"
                                        href="<?php echo e(route('del_reviews', $item->id)); ?>">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </a>
                                </th>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <th colspan="4" class="text-center">Комментариев нет</th>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('AdminPanel.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\r\resources\views/AdminPanel/reviews/list.blade.php ENDPATH**/ ?>