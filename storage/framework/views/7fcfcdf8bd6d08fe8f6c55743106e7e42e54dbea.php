<?php $__env->startSection('main-section'); ?>
    <div class="container">
        <div class="container-fluid">
            <div class="mt-4 ">
                <h2>Настройки сайта</h2>
                <div aria-label="breadcrumb mt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">Настройки сайта</li>
                        <li class="breadcrumb-item active">Редактировать</li>
                        
                    </ol>
                </div>
            </div>
            <div id="alert"
                class="<?php echo e(session()->get('msgst') ? 'alert  alert-' . session()->get('msgst') : 'm-0 border-0 p-0'); ?>">
                <?php echo e(session()->get('msg') ?? null); ?></div>
            <div class="mt-4">
                <div class="card" style="width:90%;">
                    <div class="card-header">
                        <h4 class="">Редактор сайта</h4>
                    </div>
                    <div class="card-body">
                        <form class="row g-3" action="<?php echo e(route('save_settings')); ?>" method="POST"
                            enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row border-bottom border-2 m-auto mt-3">
                                <div class="col mb-2 mx-auto">
                                    <div class="mb-2">
                                        <h5 class="card-title">Основные настройки</h5>
                                        <div class="row mb-2">
                                            <div class="col-md-6">
                                                <label for="" class="form-label">Название сайта</label>
                                                <input type="text" class="form-control" name="site_title"
                                                    value="<?php echo e($siteSetting['site_title'] ?? ''); ?>">
                                                <div class="text-danger">
                                                    <?php $__errorArgs = ['site_title'];
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
                                                <label for="" class="form-label">Название бреда</label>
                                                <input type="text" class="form-control" name="brand_title"
                                                    value="<?php echo e($siteSetting['brand_title'] ?? ''); ?>">
                                                <div class="text-danger">
                                                    <?php $__errorArgs = ['brand_title'];
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
                                        <div class="row mb-2">
                                            <div class="col-md-6">
                                                <label for="" class="form-label">Описание</label>
                                                <input type="text" class="form-control" name="meta_discription"
                                                    value="<?php echo e($siteSetting['meta_discription'] ?? ''); ?>">
                                                <div class="text-danger">
                                                    <?php $__errorArgs = ['meta_discription'];
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
                                                <label for="" class="form-label">Контент подвала</label>
                                                <input type="text" class="form-control" name="footer_content"
                                                    value="<?php echo e($siteSetting['footer_content'] ?? ''); ?>">
                                                <div class="text-danger">
                                                    <?php $__errorArgs = ['footer_content'];
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
                                        <div class="row mb-2">
                                            <div class="col-md-6">
                                                <label for="" class="form-label">Почта сайта</label>
                                                <input type="text" class="form-control" name="site_email"
                                                    value="<?php echo e($siteSetting['site_email'] ?? ''); ?>">
                                                <div class="text-danger">
                                                    <?php $__errorArgs = ['site_email'];
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
                                                <label for="" class="form-label">Контакты сайта</label>
                                                <input type="text" class="form-control" name="site_contact"
                                                    value="<?php echo e($siteSetting['site_contact'] ?? ''); ?>">
                                                <div class="text-danger">
                                                    <?php $__errorArgs = ['site_contact'];
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
                                    </div>
                                    <div class="mb-2">
                                        <h5 class="card-title">Ссылки на социальные сети</h5>
                                        <div class="row mb-2">
                                            <div class="col-md-6">
                                                <label for="" class="form-label">Фейсбук</label>
                                                <input type="text" class="form-control" name="facebook_url"
                                                    value="<?php echo e($siteSetting['facebook_url'] ?? ''); ?>">
                                                <div class="text-danger">
                                                    <?php $__errorArgs = ['facebook_url'];
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
                                                <label for="" class="form-label">Инстаграм</label>
                                                <input type="text" class="form-control" name="instagram_url"
                                                    value="<?php echo e($siteSetting['instagram_url'] ?? ''); ?>">
                                                <div class="text-danger">
                                                    <?php $__errorArgs = ['instagram_url'];
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
                                        <div class="row mb-2">
                                            <div class="col-md-6">
                                                <label for="" class="form-label">Ютуб</label>
                                                <input type="text" class="form-control" name="youtube_url"
                                                    value="<?php echo e($siteSetting['youtube_url'] ?? ''); ?>">
                                                <div class="text-danger">
                                                    <?php $__errorArgs = ['youtube_url'];
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
                                                <label for="" class="form-label">Твиттер</label>
                                                <input type="text" class="form-control" name="twitter_url"
                                                    value="<?php echo e($siteSetting['twitter_url'] ?? ''); ?>">
                                                <div class="text-danger">
                                                    <?php $__errorArgs = ['twitter_url'];
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
                                    </div>
                                </div>
                                <div class="col-md-4 mx-auto mb-2 ps-2 border-start">
                                    <div class="col-md-12 mb-2">
                                        <label for="" class="form-label">Логотип</label>
                                        <div class="input-group">
                                            <input type="file" class="form-control" name="logo_image">
                                        </div>
                                        <div class="text-danger mt-0">
                                            <?php $__errorArgs = ['logo_image'];
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
                                    <?php if(!empty($siteSetting['logo_image'])): ?>
                                        <div class="mb-2">
                                            <label for="" class="form-label">Current Logo</label>
                                            <?php if(session()->get('AdminUser')['type'] == 'R'): ?>
                                                <button data-name="Logo Image" data-key="logo_image"
                                                    class="mb-2 btn btn-danger btn-sm ajaxDelete"><i class="fa fa-remove"
                                                        aria-hidden="true"></i> Удалить</button>
                                            <?php endif; ?>
                                            <img class="form-control" style="cursor: pointer" data-fancybox="gallery"
                                                data-src="<?php echo e(asset('/storage/siteSettings/' . $siteSetting['logo_image'])); ?>"
                                                src="<?php echo e(asset('/storage/siteSettings/' . $siteSetting['logo_image'])); ?>"
                                                alt="Error">
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php if(session()->get('AdminUser')['type'] == 'R'): ?>
                                <div class="col-12">
                                    <button class="btn btn-success" type="submit">Обновить</button>
                                </div>
                            <?php endif; ?>
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
            $('.alert').fadeOut(3000);
            Fancybox.bind("gallery", {});
            $(document).on('click', '.ajaxDelete', function(e) {
                e.preventDefault();
                var _this = $(this);
                var name = $(this).attr('data-name');
                var key = $(this).attr('data-key');
                var csrf = "<?php echo e(csrf_token()); ?>";

                if (confirm('Are you sure to delete current ' + name + ' ?')) {
                    data = {
                        key: key,
                        _token: csrf
                    }
                    $.ajax({
                        type: "POST",
                        url: "<?php echo e(route('ajaxDelete')); ?>",
                        data: data,
                        dataType: "JSON",
                        success: function(response) {
                            if (response.status) {
                                $('.alert').fadeIn();
                                // alert(response.message);
                                // $(_this).parent('div').attr('hidden', 'true');
                                $(_this).parent('div').html('');
                                $('#alert').addClass('alert alert-danger')
                                    .removeClass('m-0 border-0 p-0').html('Image Deleted...');
                                $('.alert').fadeOut(3000);
                            }
                        }
                    });
                }
                // console.log(key, name);
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('AdminPanel.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\r\resources\views/AdminPanel/SiteSettings/formlist.blade.php ENDPATH**/ ?>