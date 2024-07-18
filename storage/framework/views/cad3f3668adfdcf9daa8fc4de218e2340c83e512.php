<?php $__env->startSection('main-section'); ?>
    <div class="container">
        <div class="container-fluid">
            <div class="mt-4 ">
                <h2>Пользователи</h2>
                <div aria-label="breadcrumb mt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">Пользователи</li>
                        <li class="breadcrumb-item active">Список</li>
                    </ol>
                </div>
            </div>
            <div id="alert"
                class="<?php echo e(session()->get('msgst') ? 'alert  alert-' . session()->get('msgst') : 'm-0 border-0 p-0'); ?>">
                <?php echo e(session()->get('msg') ?? null); ?></div>
            <div class="mt-4">
                <table class="table table-hover table-striped" id="data">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Аватарка</th>
                            <th scope="col">Имя профиля</th>
                            <th scope="col">Почта</th>
                            <th scope="col">Тип</th>
                            <?php if(session()->get('AdminUser')['type'] == 'R'): ?>
                                <th scope="col">Действие</th>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $usersData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th scope="row"><?php echo e($item->id); ?></th>
                                <th scope="row"><img class="rounded" height="32" width="32"
                                        src="<?php echo e(!empty($item->Data->image) ? asset('/storage/userdata/' . $item->Data->image) : asset('stockUser.png')); ?>"
                                        alt=""></th>
                                <th scope="row"><?php echo e($item->name); ?></th>
                                <th scope="row"><?php echo e($item->email); ?></th>
                                <th scope="row">
                                    <select class="form-control type" id="<?php echo e($item->id); ?>"
                                        data-name="<?php echo e($item->name); ?>">
                                        <option <?php if($item->type == 'A'): ?> selected <?php endif; ?> value="A">Администратор</option>
                                        <option <?php if($item->type == 'U'): ?> selected <?php endif; ?> value="U">Пользователь</option>
                                    </select>
                                </th>
                                <?php if(session()->get('AdminUser')['type'] == 'R'): ?>
                                    <th scope="row">
                                        <a class="btn btn-danger btn-sm" onclick="confirm('Вы действительно собираетесь удалить?')"
                                            href="<?php echo e(route('del_users', $item->id)); ?>">
                                            <i class="fa fa-trash" aria-hidden="true"></i></a>
                                    </th>
                                <?php endif; ?>
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
            var old_val;
            $(document).on('focus', '.type', function(e) {
                old_val = $(this).val();
            });
            $(document).on('change', '.type', function(e) {
                e.preventDefault();
                var id = $(this).attr('id');
                var name = $(this).attr('data-name');
                var new_val = $(this).val();
                var csrf = "<?php echo e(csrf_token()); ?>";

                if (!confirm('Are you sure to change ' + name + '\'s Account Type?')) {
                    $(this).val(old_val);
                    return;
                } else {
                    data = {
                        id: id,
                        typ: new_val,
                        _token: csrf
                    }
                    $.ajax({
                        type: "POST",
                        url: "<?php echo e(route('type_users')); ?>",
                        data: data,
                        dataType: "JSON",
                        success: function(response) {
                            if (response.status) {
                                $('.alert').fadeIn();
                                // alert(response.message);
                                $('#alert').addClass('alert alert-success')
                                    .removeClass('m-0 border-0 p-0').html('Edited...');
                                $('.alert').fadeOut(3000);
                            }
                        }
                    });
                    old_val = new_val;
                }

            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('AdminPanel.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\r\resources\views/AdminPanel/users/list.blade.php ENDPATH**/ ?>