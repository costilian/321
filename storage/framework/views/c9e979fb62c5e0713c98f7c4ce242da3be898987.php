<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">
        <?php echo e($brand_title->value ?? 'DG-Estate'); ?>

        <?php if($status): ?>
            | <?php echo e($user['name']); ?>

        <?php else: ?>
            | Гость
        <?php endif; ?>
    </a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="w-100" ></div>
    
    <div class="navbar-nav">

        <?php if($status): ?>
            <div class="nav-item text-nowrap btn btn-dark">
                <a class="nav-link px-3" href="<?php echo e(url(route('AdminLogout'))); ?>">Выйти</a>
            </div>
        <?php else: ?>
            <div class="nav-item text-nowrap btn btn-dark">
                <a class="nav-link px-3" href="<?php echo e(url(route('AdminLoginPage'))); ?>">Вход</a>
            </div>
        <?php endif; ?>
    </div>
</header>
<?php /**PATH C:\OSPanel\domains\r\resources\views/AdminPanel/layouts/navbar.blade.php ENDPATH**/ ?>