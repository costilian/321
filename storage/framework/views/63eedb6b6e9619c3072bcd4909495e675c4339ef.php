<!-- Footer Bootstrap -->
<div class="container">
    <footer class="footer mt-auto py-5">
        <div class="row">
            <div class="col-3">
                <h5><i class="fa fa-sitemap" aria-hidden="true"></i> Навигация</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="<?php echo e(route('userHome')); ?>" class="nav-link p-0 text-muted">Главная</a></li>
                    <li class="nav-item mb-2"><a href="<?php echo e(route('show')); ?>" class="nav-link p-0 text-muted">Недвижимость</a></li>
                    <li class="nav-item mb-2"><a href="<?php echo e(route('show_about')); ?>" class="nav-link p-0 text-muted">О нас</a></li>
                    <li class="nav-item mb-2"><a href="<?php echo e(route('show_faq')); ?>" class="nav-link p-0 text-muted">Часто задаваемые вопросы                    </a></li>
                    <li class="nav-item mb-2"><a href="<?php echo e(route('show_terms')); ?>" class="nav-link p-0 text-muted">Условия</a></li>
                </ul>
            </div>

            <div class="col-3">
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="<?php echo e(route('userHome')); ?>" class="nav-link p-0 text-muted">Главная</a></li>
                    <li class="nav-item mb-2"><a href="<?php echo e(route('show')); ?>" class="nav-link p-0 text-muted">Недвижимость</a></li>
                    <li class="nav-item mb-2"><a href="<?php echo e(route('UserProfile')); ?>" class="nav-link p-0 text-muted">Профиль</a></li>
                    <li class="nav-item mb-2"><a href="<?php echo e(route('show_saved_pro')); ?>" class="nav-link p-0 text-muted">Закладки</a></li>
                </ul>
            </div>
            <div class="col-4 offset-1">
                <div class="mb-3 row">
                    <?php if(!empty($logo_image->value)): ?>
                        <div class="col-2 me-3">
                            <a class="navbar-brand" href="<?php echo e(route('userHome')); ?>">
                                <img style="height: 80px" src="<?php echo e(asset('storage/siteSettings/' . $logo_image->value)); ?>"
                                    alt="<?php echo e($brand_title->value ?? 'АН"Компас'); ?>">
                            </a>
                        </div>
                    <?php endif; ?>
                    <div class="col my-auto">
                        <a class="text-muted btn p-0" href="<?php echo e(route('userHome')); ?>">
                            <h4><?php echo e($brand_title->value ?? 'АН"Компас'); ?></h4>
                        </a>
                    </div>
                </div>
                <div class="mb-3">
                    <h5 class="mb-3"><i class="far fa-address-book"></i> Связаться с нами</h5>
                    <?php if(!empty($contacts['phone']->value)): ?>
                        <h6 class="mb-2">
                            <a class="btn btn-outline-success btn-sm"
                                href="tel:<?php echo e($contacts['phone']->value); ?>">
                                <i class="fas fa-phone-alt"></i> <?php echo e($contacts['phone']->value); ?></a></h6>
                    <?php endif; ?>
                    <?php if(!empty($contacts['email']->value)): ?>
                        <h6 class="mb-2">
                            <a class="btn btn-outline-primary btn-sm"
                                href="mailto:<?php echo e($contacts['email']->value); ?>">
                                <i class="fas fa-envelope"></i> <?php echo e($contacts['email']->value); ?></a></h6>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-between py-4 my-4 border-top">
            <p><?php echo e($footer_content->value ?? '2023 Никита Константинов'); ?></p>
            <ul class="list-unstyled d-flex">
                <?php $__currentLoopData = $social_links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(!empty($value->value)): ?>
                        <li class="ms-3">
                            <a class="link-dark" href="<?php echo e($value->value); ?>">
                                <h4>
                                    <i class="fa <?php echo e('fa-' . $key); ?>" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </footer>
</div>
<?php /**PATH C:\OSPanel\domains\r\resources\views/layouts/footer.blade.php ENDPATH**/ ?>