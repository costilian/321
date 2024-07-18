<?php $__env->startSection('main-section'); ?>
    <div class="container">
        <div class="container-fluid">
            <div class="mt-4">
                <h2>CMS</h2>
                <div aria-label="breadcrumb mt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">CMS</li>
                        <li class="breadcrumb-item active">Редактирование</li>
                    </ol>
                </div>
            </div>
            <div id="alert"
                class="<?php echo e(session()->get('msgst') ? 'alert  alert-' . session()->get('msgst') : 'm-0 border-0 p-0'); ?>">
                <?php echo e(session()->get('msg') ?? null); ?></div>
            <div class="mt-4">
                <div class="card" style="width:90%;">
                    <form action="<?php echo e(route('save_cms')); ?>" method="POST" enctype="multipart/form-data">
                        <nav class="card-header fs-5">
                            <div class="d-flex">
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                        aria-selected="true">Главная</button>
                                    <button class="nav-link" id="nav-about-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-about" type="button" role="tab" aria-controls="nav-about"
                                        aria-selected="false">О нас</button>
                                    <button class="nav-link" id="nav-faq-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-faq" type="button" role="tab" aria-controls="nav-faq"
                                        aria-selected="false">Часто задаваемые вопросы</button>
                                    <button class="nav-link" id="nav-terms-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-terms" type="button" role="tab" aria-controls="nav-terms"
                                        aria-selected="false">Условия</button>
                                </div>
                                <?php if(session()->get('AdminUser')['type'] == 'R'): ?>
                                    <div class="ms-auto">
                                        <button class="btn btn-success h-100" type="submit">Редактировать</button>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </nav>
                        <div class="card-body">
                            <?php echo csrf_field(); ?>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <div class="row">
                                        <h5 class="card-title">"Шапка" главной страницы</h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Название</label>
                                            <input type="text" class="form-control" name="home_title"
                                                value="<?php echo e($cms['home_title'] ?? ''); ?>">
                                            <div class="text-danger">
                                                <?php $__errorArgs = ['home_title'];
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
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Описание</label>
                                            <input type="text" class="form-control" name="home_meta"
                                                value="<?php echo e($cms['home_meta'] ?? ''); ?>">
                                            <div class="text-danger">
                                                <?php $__errorArgs = ['home_meta'];
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
                                        <h5 class="card-title">Содержание</h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Изображение</label>
                                            <input type="file" class="form-control" name="home_image">
                                            <div class="text-danger">
                                                <?php $__errorArgs = ['home_image'];
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
                                        <div class="col-md-6 mb-2">
                                            <?php if(!empty($cms['home_image'])): ?>
                                                <label for="" class="form-label">Текущее изображение</label>
                                                <?php if(session()->get('AdminUser')['type'] == 'R'): ?>
                                                    <button data-name="Home Image" data-key="home_image"
                                                        class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                <?php endif; ?>
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                    data-fancybox="gallery"
                                                    data-src="<?php echo e(asset('/storage/cms/' . $cms['home_image'])); ?>"
                                                    src="<?php echo e(asset('/storage/cms/' . $cms['home_image'])); ?>" alt="Error">
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <label for="" class="form-label">Содержание</label>
                                            <textarea name="home_content" id="home_content"
                                                class="ckeditor"><?php echo e($cms['home_content'] ?? ''); ?></textarea>
                                        </div>
                                        <?php if(session()->get('AdminUser')['type'] == 'R'): ?>
                                            <div class="col-md-12">
                                                <button class="btn btn-success" type="submit">Редактировать</button>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                    <div class="row">
                                        <h5 class="card-title">О нас "Шапка"</h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Название</label>
                                            <input type="text" class="form-control" name="about_title"
                                                value="<?php echo e($cms['about_title'] ?? ''); ?>">
                                            <div class="text-danger">
                                                <?php $__errorArgs = ['about_title'];
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
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Описание</label>
                                            <input type="text" class="form-control" name="about_meta"
                                                value="<?php echo e($cms['about_meta'] ?? ''); ?>">
                                            <div class="text-danger">
                                                <?php $__errorArgs = ['about_meta'];
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
                                        <h5 class="card-title">О нас содержание</h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Изображение</label>
                                            <input type="file" class="form-control" name="about_image">
                                            <div class="text-danger">
                                                <?php $__errorArgs = ['about_image'];
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
                                        <div class="col-md-6 mb-2">
                                            <?php if(!empty($cms['about_image'])): ?>
                                                <label for="" class="form-label">Текущее изображение</label>
                                                <?php if(session()->get('AdminUser')['type'] == 'R'): ?>
                                                    <button data-name="About Image" data-key="about_image"
                                                        class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                <?php endif; ?>
                                                <img height="200px" class="form-control w-auto" style="cursor: pointer"
                                                    data-fancybox="gallery"
                                                    data-src="<?php echo e(asset('/storage/cms/' . $cms['about_image'])); ?>"
                                                    src="<?php echo e(asset('/storage/cms/' . $cms['about_image'])); ?>" alt="Error">
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <label for="" class="form-label">Содержание</label>
                                            
                                            <textarea name="about_content" class="ckeditor"
                                                id="about_content"><?php echo e($cms['about_content'] ?? ''); ?></textarea>
                                        </div>
                                        <?php if(session()->get('AdminUser')['type'] == 'R'): ?>
                                            <div class="col-md-12">
                                                <button class="btn btn-success" type="submit">Редактировать</button>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-faq" role="tabpanel" aria-labelledby="nav-faq-tab">
                                    <div class="row">
                                        <h5 class="card-title">ЧЗВ "Шапка" </h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Название</label>
                                            <input type="text" class="form-control" name="faq_title"
                                                value="<?php echo e($cms['faq_title'] ?? ''); ?>">
                                            <div class="text-danger">
                                                <?php $__errorArgs = ['faq_title'];
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
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Описание</label>
                                            <input type="text" class="form-control" name="faq_meta"
                                                value="<?php echo e($cms['faq_meta'] ?? ''); ?>">
                                            <div class="text-danger">
                                                <?php $__errorArgs = ['faq_meta'];
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
                                        <h5 class="card-title">ЧЗВ Содержание</h5>
                                        <div class="col-md-12 mb-2">
                                            <label for="" class="form-label">Содержание</label>
                                            <textarea name="faq_content" class="ckeditor"
                                                id="faq_content"><?php echo e($cms['faq_content'] ?? ''); ?></textarea>
                                        </div>
                                        <?php if(session()->get('AdminUser')['type'] == 'R'): ?>
                                            <div class="col-md-12">
                                                <button class="btn btn-success" type="submit">Редактировать</button>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-terms" role="tabpanel" aria-labelledby="nav-terms-tab">
                                    <div class="row">
                                        <h5 class="card-title">Условия "Шапка"</h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Название</label>
                                            <input type="text" class="form-control" name="terms_title"
                                                value="<?php echo e($cms['terms_title'] ?? ''); ?>">
                                            <div class="text-danger">
                                                <?php $__errorArgs = ['tems_title'];
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
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Описание</label>
                                            <input type="text" class="form-control" name="terms_meta"
                                                value="<?php echo e($cms['terms_meta'] ?? ''); ?>">
                                            <div class="text-danger">
                                                <?php $__errorArgs = ['terms_meta'];
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
                                        <h5 class="card-title">Условие содержание</h5>
                                        <div class="col-md-12 mb-2">
                                            <label for="" class="form-label">Содержание</label>
                                            <textarea name="terms_content" class="ckeditor"
                                                id="terms_content"><?php echo e($cms['terms_content'] ?? ''); ?></textarea>
                                        </div>
                                        <?php if(session()->get('AdminUser')['type'] == 'R'): ?>
                                            <div class="col-md-12">
                                                <button class="btn btn-success" type="submit">Редактировать</button>
                                            </div>
                                        <?php endif; ?>
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
            $('.alert').fadeOut(3000);

            Fancybox.bind("gallery", {});
            // var ckeditor = new CKEDITOR
            $(window).on('load', function() {
                $('.ckeditor').ckeditor();
            });
            // CKEDITOR.replaceAll('ckeditor');

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
                        url: "<?php echo e(route('cmsajaxDelete')); ?>",
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

<?php echo $__env->make('AdminPanel.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\r\resources\views/AdminPanel/cms/formlist.blade.php ENDPATH**/ ?>