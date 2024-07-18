@push('title')
    Регистрация  АН"Компас
@endpush
@include('layouts.header')


<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">
            <h1 class="display-4 fw-bold lh-1 mb-3">Добро пожаловать на веб-сайт<br /> АН "Компас"</h1>
            <p class="col-lg-10 fs-4">
                Мотивирующий текст
            </p>
        </div>
        <div class="col-md-10 mx-auto col-lg-5">
            <form class="p-4 p-md-5 border rounded-3 bg-light" method="POST" action="{{ route('UserSignup') }}">

                @csrf
                <x-log-input type="text" name="name" label="Имя пользователя" placeholder="name" />
                <x-log-input type="email" name="email" label="Почта" placeholder="name@example.ru" />
                <x-log-input type="password" name="password" label="Пароль" placeholder="Password" />
                <x-log-input type="password" name="conf_password" label="Подтверждение пароля" placeholder="Password" />
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Запомнить меня
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Зарегистрироваться</button>
                <hr class="my-4">
                <small class="text-muted">Нажав кнопку Зарегистрироваться, вы соглашаетесь с условиями использования.</small>
                <hr class="4">
                <small class="text-muted">У вас уже есть аккаунт? <a href="{{ route('UserLoginForm') }}">Вход</a></small>
            </form>
        </div>
    </div>
</div>

@include('layouts.close')
