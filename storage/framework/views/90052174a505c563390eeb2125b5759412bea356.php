<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 ps-1">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="py-0 nav-link <?php if($menu == 'dashboard'): ?> fw-bolder fs-6 active <?php endif; ?> "
                    aria-current="page" href="<?php echo e(route('AdminHome')); ?>">
                    <div class="d-flex">
                        <div style="width: 25px" class="fs-5 text-center">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        <span class="ms-2 my-auto">
                            Админ - Панель
                        </span>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="py-0 nav-link <?php if($menu == 'category'): ?> fw-bolder fs-6 active <?php endif; ?> "
                    aria-current="page" href="<?php echo e(route('list_category')); ?>">
                    <div class="d-flex">
                        <div style="width: 25px" class="fs-5 text-center">
                            <i class="fas fa-cubes"></i>
                        </div>
                        <span class="ms-2 my-auto">
                            Категории
                        </span>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="py-0 nav-link <?php if($menu == 'cities'): ?> fw-bolder fs-6 active <?php endif; ?> "
                    aria-current="page" href="<?php echo e(route('list_cities')); ?>">
                    <div class="d-flex">
                        <div style="width: 25px" class="fs-5 text-center">
                            <i class="fas fa-city"></i>
                        </div>
                        <span class="ms-2 my-auto">
                            Города
                        </span>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="py-0 nav-link <?php if($menu == 'facilities'): ?> fw-bolder fs-6 active <?php endif; ?> "
                    aria-current="page" href="<?php echo e(route('list_facilities')); ?>">
                    <div class="d-flex">
                        <div style="width: 25px" class="fs-5 text-center">
                            <i class="fas fa-shapes"></i>
                        </div>
                        <span class="ms-2 my-auto">
                            Условия
                        </span>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="py-0 nav-link <?php if($menu == 'properties'): ?> fw-bolder fs-6 active <?php endif; ?> "
                    aria-current="page" href="<?php echo e(route('list_properties')); ?>">
                    <div class="d-flex">
                        <div style="width: 25px" class="fs-5 text-center">
                            <i class="fas fa-building"></i>
                        </div>
                        <span class="ms-2 my-auto">
                            Недвижимость
                        </span>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="py-0 nav-link <?php if($menu == 'gallary'): ?> fw-bolder fs-6 active <?php endif; ?> "
                    aria-current="page" href="<?php echo e(route('list_gallary')); ?>">
                    <div class="d-flex text-center">
                        <div style="width: 25px" class="fs-5">
                            <i class="fas fa-images"></i>
                        </div>
                        <span class="ms-2 my-auto">
                            Галлерея
                        </span>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="py-0 nav-link <?php if($menu == 'reviews'): ?> fw-bolder fs-6 active <?php endif; ?> "
                    aria-current="page" href="<?php echo e(route('list_reviews')); ?>">
                    <div class="d-flex">
                        <div style="width: 25px" class="fs-5 text-center">
                            <i class="fas fa-comment-alt"></i>
                        </div>
                        <span class="ms-2 my-auto">
                            Комментарии
                        </span>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="py-0 nav-link <?php if($menu == 'users'): ?> fw-bolder fs-6 active <?php endif; ?> "
                    aria-current="page" href="<?php echo e(route('list_users')); ?>">
                    <div class="d-flex">
                        <div style="width: 25px" class="fs-5 text-center">
                            <i class="fas fa-users"></i>
                        </div>
                        <span class="ms-2 my-auto">
                            Пользователи
                        </span>
                    </div>
                </a>
            </li>
        </ul>
        <?php if($user['type'] == 'R'): ?>
            <h6
                class="
                sidebar-heading
                d-flex
                justify-content-between
                align-items-center
                px-3
                mt-4
                mb-1
                text-muted
              ">
                <span>Полные права</span>
                <a class="link-secondary" href="#" aria-label="Add a new report">
                    <span data-feather="plus-circle"></span>
                </a>
            </h6>
            <ul class="nav flex-column mb-2">

                <li class="nav-item">
                    <a class="py-0 nav-link <?php if($menu == 'cms'): ?> fw-bolder fs-6 active <?php endif; ?> "
                        aria-current="page" href="<?php echo e(route('list_cms')); ?>">
                        <div class="d-flex">
                            <div style="width: 25px" class="fs-5 text-center">
                                <i class="fas fa-cog"></i>
                            </div>
                            <span class="ms-2 my-auto">
                                CMS
                            </span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="py-0 nav-link <?php if($menu == 'site_settings'): ?> fw-bolder fs-6 active <?php endif; ?> "
                        aria-current="page" href="<?php echo e(route('list_settings')); ?>">
                        <div class="d-flex">
                            <div style="width: 25px" class="fs-5 text-center">
                                <i class="fas fa-cog"></i>
                            </div>
                            <span class="ms-2 my-auto">
                                Настройки сайта
                            </span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="py-0 nav-link <?php if($menu == 'chng_password'): ?> fw-bolder fs-6 active <?php endif; ?> "
                        aria-current="page" href="<?php echo e(route('chng_password')); ?>">
                        <div class="d-flex">
                            <div style="width: 25px" class="fs-5 text-center">
                                <i class="fas fa-key"></i>
                            </div>
                            <span class="ms-2 my-auto">
                                Смена пароля
                            </span>
                        </div>
                    </a>
                </li>
            </ul>
        <?php endif; ?>
    </div>
</nav>
<?php /**PATH C:\OSPanel\domains\r\resources\views/AdminPanel/layouts/sidebar.blade.php ENDPATH**/ ?>