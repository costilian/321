<?php $__env->startSection('content_box'); ?>
    <img style="max-height: 513px" class="w-100"
        src="<?php echo e($item->fe_image ? asset('/storage/property/' . $item->fe_image) : asset('/storage/property/' . $item->image)); ?>"
        alt="<?php echo e($item->title); ?>">
    <div class="container">
        <div class="py-5">
            
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="card mb-3 p-0">
                        <div class="row g-0 mb-2 border-bottom">
                            <div class="col-md-4">
                                
                                    <img class="img-fluid rounded-start h-100 w-100" style="cursor: pointer" data-fancybox="gallery"
                                        data-src="<?php echo e(asset('/storage/property/' . $item->image)); ?>"
                                        src="<?php echo e(asset('/storage/property/' . $item->image)); ?>" alt="<?php echo e($item->title); ?>">
                                
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <a class="btn p-0 text-secondary"
                                                href="<?php echo e(route('show_pro', $item->title_slug)); ?>">
                                                <h1 class="card-title"><?php echo e($title); ?></h1>
                                            </a>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <p class="card-text mb-1">
                                                <a class="btn btn-sm btn-outline-dark"
                                                    href="<?php echo e(route('show_category', $item->Cate->slug_name)); ?>">
                                                    <?php echo e($item->Cate->name); ?>

                                                </a>
                                                <a class="btn btn-sm btn-outline-secondary"
                                                    href="<?php echo e(route('show_city', $item->City->slug_city)); ?>">
                                                    <?php echo e($item->City->city); ?>

                                                </a>
                                            </p>
                                            <div class="col-12 mb-3 w-75">
                                                <p class="card-text" style="text-align: justify">
                                                    <?php echo e($item->description); ?></p>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <p class="card-text">
                                                    <i class="fas fa-bed"></i> <?php echo e($item->rooms); ?>

                                                    <i class="fas fa-shower"></i> <?php echo e($item->bathrooms); ?>

                                                </p>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <?php if($status): ?>
                                                    <a class="btn btn-lg
                                                    <?php if(!empty($saved)): ?>
                                                        <?php if(in_array($item->title_slug, $saved)): ?> btn-success
                                                    <?php else: ?>
                                                        btn-outline-success
                                                    <?php endif; ?>
                                                <?php else: ?>
                                                    btn-outline-success
                                                <?php endif; ?>
                                                save_pro"
                                                        href="<?php echo e(route('save_pro_ajax', [$item->title_slug, $item->id])); ?>">
                                                        <i class="fa fa-bookmark" aria-hidden="true"></i>
                                                        <span class="save_pro_text">
                                                            <?php if(!empty($saved)): ?>
                                                                <?php if(in_array($item->title_slug, $saved)): ?>
                                                                    В закладках
                                                                <?php else: ?>
                                                                    Сохранить
                                                                <?php endif; ?>
                                                            <?php else: ?>
                                                                Сохранить
                                                            <?php endif; ?>
                                                        </span>
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0 mb-2 border-bottom card-body">
                            <div class="col-4">
                                <div class="card-body">
                                    <h4 class="card-title"><i class="fas fa-sign"></i> 
                                        <?php echo e(ucfirst($item->purpose)); ?>...</h4>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-2">
                                            <h5 class="card-title"><i class="fas fa-tag"></i> Цена :</h5>
                                        </div>
                                        <div class="col-10">
                                            <h5 class="card-text">
                                                ₽ <?php echo e(number_format($item->price)); ?>

                                                <?php if($item->purpose != 'продажа'): ?>
                                                    / Месяц
                                                <?php endif; ?>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 mb-2">
                                            <?php if(!empty($gals)): ?>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <h5 class="card-title"><i class="fas fa-images"></i> Изображения:
                                                        </h5>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="carousel">
                                                            <?php $__empty_1 = true; $__currentLoopData = $gals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                                <div class="carousel__slide">
                                                                    <img class="w-100 rounded"
                                                                        src="<?php echo e(asset('/storage/gallary/' . $gal->pro_id . '/' . $gal->gal_image)); ?>"
                                                                        data-fancybox="gallery"
                                                                        data-src="<?php echo e(asset('/storage/gallary/' . $gal->pro_id . '/' . $gal->gal_image)); ?>"
                                                                        alt="Error">
                                                                </div>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                                <h6>Изображения отсутствуют</h6>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            <?php if(!empty($item->video)): ?>
                                                <div class="row">
                                                    <div class="col-2 mb-2">
                                                        <h5 class="card-title"><i class="fab fa-youtube"></i> Видео :
                                                        </h5>
                                                    </div>
                                                    <div class="col-12 mb-2">
                                                        
                                                            <?php echo $item->video; ?>

                                                        
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 border-start">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3 mb-3">
                                            <h6 class="card-title"><i class="fas fa-th-large"></i> Площадь :</h>
                                        </div>
                                        <div class="col-9 mb-3">
                                            <h5 class="card-text">
                                                <?php echo e(number_format($item->area)); ?> м²
                                            </h5>
                                        </div>
                                        <?php if(!empty($item->floorplan)): ?>
                                            <div class="col-12 mb-3">
                                                <h5 class="card-title">
                                                    <i class="fas fa-drafting-compass"></i> План :
                                                </h5>
                                                <img class="w-100 rounded"
                                                    style="cursor: pointer"
                                                    src="<?php echo e(asset('/storage/property/' . $item->floorplan)); ?>"
                                                    data-fancybox="gallery"
                                                    data-src="<?php echo e(asset('/storage/property/' . $item->floorplan)); ?>"
                                                    alt="Error">
                                            </div>
                                        <?php endif; ?>
                                        <?php if(!empty($faci)): ?>
                                            <div class="col-12 mb-3">
                                                <h5 class="card-title">
                                                    <i class="fas fa-shapes"></i> Условия :
                                                </h5>
                                                <div class="card-text">
                                                    <?php $__currentLoopData = $faci; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fac): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($fac): ?>
                                                            <button class="btn btn-<?php echo e($fac->color); ?> m-1 mb-2">
                                                                <?php echo $fac->fa; ?> <?php echo e($fac->faci); ?>

                                                            </button>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <div class="col-12 mb-3">
                                            <h5 class="card-title">
                                                <i class="fas fa-address-book"></i> Контакты :
                                            </h5>
                                            <div class="row">
                                                <div class="col-6">
                                                    <a href="tel:<?php echo e($item->cont_ph); ?>"
                                                        class="btn btn-success mb-1 w-auto">
                                                        <i class="fas fa-phone-alt"></i> <?php echo e($item->cont_ph); ?></a>
                                                </div>
                                                <div class="col-6">
                                                    <a href="mailto:<?php echo e($item->cont_em); ?>"
                                                        class="btn btn-primary mb-1 w-auto">
                                                        <i class="fas fa-envelope"></i> <?php echo e($item->cont_em); ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0 mb-2 border-bottom card-body">
                            <div class="col-2">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="fas fa-map"></i> Адрес :</h5>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <h5 class="card-text"> <?php echo e($item->address); ?></h5>
                                </div>
                            </div>
                        </div>
                        <?php if(!empty($item->map)): ?>
                            <div class="row g-0 mb-2 border-bottom card-body">
                                <div class="col-12 mb-2">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fas fa-map-marked-alt"></i> Карта :</h5>
                                    </div>
                                </div>
                                <div class="col-12 mb-2">
                                    <div class="card-body">
                                        
                                            <?php echo $item->map; ?>

                                        
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="row g-0 mb-2 card-body">
                            <div class="col-12 mb-2">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="fas fa-comment-alt"></i> Комментарии</h5>
                                </div>
                            </div>
                            <?php if($status): ?>
                                <div class="col-12 mb-2">
                                    <form action="" id="review_form" class="card-body">
                                        <?php echo csrf_field(); ?>
                                        <div class="row">
                                            <div class="col-1 text-center mb-2">
                                                <a href="<?php echo e(route('UserProfile')); ?>">
                                                    <img class="rounded-circle"
                                                        src="<?php echo e(!empty($user['data']['image'])? asset('/storage/userdata/' . $user['data']['image']): asset('stockUser.png')); ?>"
                                                        width="60px" alt="No Img">
                                                </a>
                                                <a href="<?php echo e(route('UserProfile')); ?>" class="text-decoration-none">
                                                    <p class="m-0 text-muted"><?php echo e($user['name']); ?></p>
                                                </a>
                                            </div>
                                            <div class="col-11 mb-2">
                                                <textarea name="review_text" id="review_form_input"
                                                    class="form-control h-100"
                                                    placeholder="Напишите свой комментарий..." required></textarea>
                                                <div id="review_form_btns" class="mt-2">
                                                    <div class="d-flex">
                                                        <button class="btn btn-success btn-sm ms-auto">Подвердить</button>
                                                        <button id="review_cancel"
                                                            class="btn btn-outline-danger btn-sm ms-2">Отмена</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <?php $__empty_1 = true; $__currentLoopData = $user_reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userrev): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    
                                    <div id="review<?php echo e($userrev['id']); ?>" class="col-12 mb-2">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-1 text-center mb-2">
                                                    <a href="<?php echo e(route('UserProfile')); ?>">
                                                        <img class="rounded-circle"
                                                            src="<?php echo e(!empty($user['data']['image'])? asset('/storage/userdata/' . $user['data']['image']): asset('stockUser.png')); ?>"
                                                            width="60px" alt="No Img">
                                                    </a>
                                                    <a href="<?php echo e(route('UserProfile')); ?>" class="text-decoration-none">
                                                        <p class="m-0 text-muted"><?php echo e($user['name']); ?></p>
                                                    </a>
                                                </div>
                                                <div class="col-11 mb-2">
                                                    <?php echo e($userrev['review']); ?>

                                                    <div class="mt-2">
                                                        <div class="d-flex">
                                                            
                                                            <button id="review_delete" data-id="<?php echo e($userrev['id']); ?>"
                                                                class="btn btn-outline-danger btn-sm ms-auto">Удалить</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <div class="col-12 mb-2">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12 mb-2 text-center">
                                                    <h5>Вы не комментировали данную недвижимость</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>

                            <?php endif; ?>
                            <?php $__empty_1 = true; $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <div class="col-12 mb-2">
                                    <div class="card-body">
                                        <div class="row mb-1">
                                            <div class="col-1 text-center mb-2">
                                                <img class="rounded-circle"
                                                    src="<?php echo e(!empty($review->Users[0]->Data->image)? asset('/storage/userdata/' . $review->Users[0]->Data->image): asset('stockUser.png')); ?>"
                                                    width="60px" alt="No Img">
                                                <?php echo e($review->Users[0]->name); ?>

                                            </div>
                                            <div class="col-11 mb-2">
                                                <?php echo e($review->review); ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <div class="col-12 mb-2">
                                    <div class="row">
                                        <div class="col-12 mb-2 text-center">
                                            <h5>Комментарии отсутствуют...</h5>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script>
        $(document).ready(function() {
            $('iframe').addClass('d-block mx-auto');
            $('iframe').css('width', '100%');
            $('iframe').css('height', '25em');
            // console.log('hello');

            Fancybox.bind("gallery", {});
            const myCarousel = new Carousel(document.querySelector(".carousel"), {});

            $(document).on('click', '.save_pro', function(e) {
                e.preventDefault();
                var $this = $(this);
                var url = $(this).attr('href');
                var text = $(this).find('.save_pro_text').html().trim();

                $.ajax({
                    type: "GET",
                    url: url,
                    success: function(response) {
                        if (response) {
                            $this.find('.save_pro_text').html('В закладках');
                            $this.addClass('btn-success').removeClass('btn-outline-success');
                        } else {
                            $this.find('.save_pro_text').html('Сохранить');
                            $this.addClass('btn-outline-success').removeClass('btn-success');
                        }
                    }
                });
            });
            <?php if($status): ?>
                $('#review_form_btns').hide();
                $(document).on('focus', '#review_form_input', function(e) {
                    e.preventDefault();
                    $('#review_form_btns').fadeIn(100);
                });
                $(document).on('click', '#review_cancel', function(e) {
                    e.preventDefault();
                    $('#review_form_btns').fadeOut();
                    $('#review_form_input').val('');
                });
                $(document).on('submit', '#review_form', function(e) {
                    e.preventDefault();
                    var formdata = $('#review_form').serializeArray();
                    formdata.push({
                        name: 'u_id',
                        value: <?php echo e($user['id']); ?>

                    }, {
                        name: 'pro_id',
                        value: <?php echo e($item->id); ?>

                    })
                    // console.log(formdata);
                    $.ajax({
                        type: "POST",
                        url: "<?php echo e(route('add_review')); ?>",
                        data: formdata,
                        success: function(response) {
                            location.reload();
                        }
                    });
                });
                $(document).on('click', '#review_delete', function(e) {
                    e.preventDefault();
                    var id = $(this).data('id');
                    console.log('delete ' + id);
                    $.ajax({
                        type: "GET",
                        url: `<?php echo e(route('del_review')); ?>/${id}`,
                        success: function(response) {
                            location.reload();
                        }
                    });
                });
            <?php endif; ?>

        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\r\resources\views/frontend/property.blade.php ENDPATH**/ ?>