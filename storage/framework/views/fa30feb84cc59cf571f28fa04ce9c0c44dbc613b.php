<?php $__env->startPush('title'); ?>
    Вход АН"Компас
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">
            <h1 class="display-4 fw-bold lh-1 mb-3">Добро пожаловать на веб-сайт АН "Компас"</h1>
            <p class="col-lg-10 fs-4">
                Мотивирующий текст
            </p>
        </div>
        <div class="col-md-10 mx-auto col-lg-5">
            <form class="p-4 p-md-5 border rounded-3 bg-light" method="POST" action="<?php echo e(route('UserLogin')); ?>">
                <?php echo csrf_field(); ?>
                <?php if (isset($component)) { $__componentOriginalbdfbd22e2e58b50adcb6c096444b9fae89a23f1e = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\LogInput::class, ['type' => 'email','name' => 'email','label' => 'Почта','placeholder' => 'name@example.ru']); ?>
<?php $component->withName('log-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbdfbd22e2e58b50adcb6c096444b9fae89a23f1e)): ?>
<?php $component = $__componentOriginalbdfbd22e2e58b50adcb6c096444b9fae89a23f1e; ?>
<?php unset($__componentOriginalbdfbd22e2e58b50adcb6c096444b9fae89a23f1e); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalbdfbd22e2e58b50adcb6c096444b9fae89a23f1e = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\LogInput::class, ['type' => 'password','name' => 'password','label' => 'Пароль','placeholder' => 'Пароль']); ?>
<?php $component->withName('log-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbdfbd22e2e58b50adcb6c096444b9fae89a23f1e)): ?>
<?php $component = $__componentOriginalbdfbd22e2e58b50adcb6c096444b9fae89a23f1e; ?>
<?php unset($__componentOriginalbdfbd22e2e58b50adcb6c096444b9fae89a23f1e); ?>
<?php endif; ?>
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" name="remember-me"> Запомнить меня
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Вход</button>
                <hr class="my-4">
                <small class="text-muted">Нажав кнопку Зарегистрироваться, вы соглашаетесь с условиями использования</small>

                <hr class="4"><small class="text-muted">У вас нет аккаунта? <a href="<?php echo e(route('UserSignupForm')); ?>">Зарегистрироваться</a></small>
            </form>
        </div>
    </div>
</div>

<?php echo $__env->make('layouts.close', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\OSPanel\domains\r\resources\views/User/UserLogIn.blade.php ENDPATH**/ ?>