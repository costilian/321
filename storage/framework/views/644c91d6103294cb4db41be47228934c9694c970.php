<?php $__env->startSection('main-section'); ?>
    <div class="container">
        <div class="container-fluid">
            <div class="mt-4 ">
                <h2>Недвижимость</h2>
                <div aria-label="breadcrumb mt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">Недвижимость</li>
                        <li class="breadcrumb-item active">Список</li>
                        <div class="d-flex ms-auto">
                            <a class="btn btn-primary" href="<?php echo e(route('add_properties')); ?>">Добавить</a>
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
                            <th scope="col">Доступность</th>
                            <th scope="col"></th>
                            <th scope="col">Цена(₽)</th>
                            <th scope="col">Рек.</th>
                            <th scope="col">Назнач.</th>
                            <th scope="col">Категория</th>
                            <th scope="col">Изображение</th>
                            <th scope="col">Город</th>
                            <th scope="col">Галлерея</th>
                            <th scope="col"></th>
                            <th scope="col">Действие</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $pro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th scope="row"><?php echo e($item->id); ?></th>
                                <th scope="row"
                                    <?php if($item->public == 1): ?> class="text-success">Public <?php else: ?> class="text-danger"> Скрыто <?php endif; ?></th>
                                <th scope="row"><?php echo e($item->title); ?></th>
                                <th scope="row"><?php echo e(number_format($item->price)); ?></th>
                                <th scope="row"
                                    <?php if($item->featured == 1): ?> class="text-success">Active <?php else: ?> class="text-danger"> Выключено <?php endif; ?></th>
                                <th scope="row"><?php echo e(ucfirst($item->purpose)); ?></th>
                                <th scope="row"><?php echo e($item->Cate->name); ?></th>
                                <th scope="row"><img height="30rem" class="rounded" style="cursor: pointer"
                                        data-fancybox="gallery"
                                        data-src="<?php echo e(asset('/storage/property/' . $item->image)); ?>"
                                        src="<?php echo e(asset('/storage/property/' . $item->image)); ?>" alt="Error"></th>
                                <th scope="row"><?php echo e($item->City->city); ?></th>
                                <th scope="row"><a href="<?php echo e(route('get_gallary', $item->id)); ?>"
                                        class="btn btn-info btn-sm"><i class="fas fa-images"></i></a></th>
                                <th scope="row"><a href="<?php echo e(route('get_reviews', $item->id)); ?>"
                                        class="btn btn-secondary btn-sm"><i class="fas fa-comment-alt"></i></a></th>
                                <th scope="row">
                                    <a class="btn btn-success btn-sm" href="<?php echo e(route('edit_properties', $item->id)); ?>">
                                        <i class="fa fa-edit" aria-hidden="true"></i></a>
                                    <?php if(session()->get('AdminUser')['type'] == 'R'): ?>
                                        <a class="btn btn-danger btn-sm" onclick="return confirm('удалить?')"
                                            href="<?php echo e(route('del_properties', $item->id)); ?>">
                                            <i class="fa fa-trash" aria-hidden="true"></i></a>
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

<?php echo $__env->make('AdminPanel.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\r\resources\views/AdminPanel/properties/list.blade.php ENDPATH**/ ?>