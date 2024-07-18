@push('title')
    Вход АН"Компас
@endpush
@include('layouts.header')

<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">
            <h1 class="display-4 fw-bold lh-1 mb-3">Добро пожаловать на веб-сайт АН "Компас"</h1>
            <p class="col-lg-10 fs-4">
                Мотивирующий текст
            </p>
        </div>
        <div class="col-md-10 mx-auto col-lg-5">
            <form class="p-4 p-md-5 border rounded-3 bg-light" method="POST" action="{{ route('UserLogin') }}">
                @csrf
                <x-log-input type="email" name="email" label="Почта" placeholder="name@example.ru" />
                <x-log-input type="password" name="password" label="Пароль" placeholder="Пароль" />
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" name="remember-me"> Запомнить меня
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Вход</button>
                <hr class="my-4">
                <small class="text-muted">Нажав кнопку Зарегистрироваться, вы соглашаетесь с условиями использования</small>

                <hr class="4"><small class="text-muted">У вас нет аккаунта? <a href="{{ route('UserSignupForm') }}">Зарегистрироваться</a></small>
            </form>
        </div>
    </div>
</div>

@include('layouts.close')
