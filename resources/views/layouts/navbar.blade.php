<!-- Header Bootstrap -->
<header class="py-1 bg-dark sticky-top text-white">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                @if (!empty($logo_image->value))
                    <a class="navbar-brand" href="{{ route('userHome') }}">
                        <img style="height: 40px" src="{{ asset('storage/siteSettings/' . $logo_image->value) }}"
                            alt="{{ $brand_title->value ?? 'АН"Компас' }}">
                    </a>
                @endif
                <a class="navbar-brand" href="{{ route('userHome') }}">{{ $brand_title->value ?? 'АН"Компас"' }}</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link @if ($menu == 'home') active @endif" aria-current="page"
                                href="{{ route('userHome') }}">Главная</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link @if ($menu == 'purpose') active @endif dropdown-toggle" href="#"
                                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Услуги
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('show_purpose', 'Продажа') }}">Продажа</a></li>
                                <li><a class="dropdown-item" href="{{ route('show_purpose', 'Аренда') }}">Аренда</a></li>
                                <li><a class="dropdown-item" href="{{ route('show_purpose', 'Сожительство') }}">Сожительство</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link @if ($menu == 'category') active @endif dropdown-toggle" href="#"
                                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Категории
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach ($cate as $item)
                                    <li><a class="dropdown-item"
                                            href="{{ route('show_category', $item->slug_name) }}">{{ $item->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link @if ($menu == 'city') active @endif dropdown-toggle" href="#"
                                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Город
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach ($city as $item)
                                    <li><a class="dropdown-item"
                                            href="{{ route('show_city', $item->slug_city) }}">{{ $item->city }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <form id="searchFrm" action="{{ route('propSearch') }}" method="POST" class="me-2">
                            @csrf
                            <div class="input-group">
                                <select class="form-select w-25" name="purpose" id="">
                                    <option
                                        @if (!empty($purpose)) {{ $purpose == 'Продажа' ? 'selected' : '' }} @endif
                                        value="Продажа">Продажа</option>
                                    <option
                                        @if (!empty($purpose)) {{ $purpose == 'Аренда' ? 'selected' : '' }} @endif
                                        value="Аренда">Аренда</option>
                                    <option
                                        @if (!empty($purpose)) {{ $purpose == 'Сожительство' ? 'selected' : '' }} @endif
                                        value="Сожительство">Сожительство</option>
                                    <option
                                        @if (!empty($purpose)) {{ $purpose == '*' ? 'selected' : '' }} @endif
                                        value="*">Всё</option>
                                </select>
                                <input class="form-control w-50" name="search" type="search"
                                    placeholder="Поиск по названию" value="{{ $SecStr ?? '' }}" aria-label="Search">
                                <button class="btn btn-outline-success w-25" type="submit">
                                    <i class="fas fa-search"></i>
                                    Поиск</button>
                            </div>
                        </form>

                        @if ($status)
                            {{-- Logged-In Icon --}}
                            <div class="dropdown ms-1 text-end">
                                <a href="#" class="d-block link-light text-decoration-none dropdown-toggle"
                                    id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ !empty($user['data']['image'])? asset('/storage/userdata/' . $user['data']['image']): asset('stockUser.png') }}"
                                        alt="{{ $user['name'] }}" width="38" height="38" class="rounded-circle">
                                </a>
                                <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                                    <li>
                                        <div class="dropdown-item text-dark text-bold">{{ $user['name'] }}</div>
                                    </li>
                                    @if ($user['type'] == 'A' || $user['type'] == 'R')
                                        <li><a class="dropdown-item" target="_blank"
                                                href="{{ route('AdminHome') }}">Админ</a></li>
                                    @endif
                                    <li><a class="dropdown-item" href="{{ route('UserProfile') }}">Профиль</a></li>
                                    <li><a class="dropdown-item" href="{{ route('show_saved_pro') }}">Закладки</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="{{ route('UserLogout') }}">Выход</a></li>
                                </ul>
                            </div>
                        @else
                            <div class="me-2">
                                <a class="btn btn-outline-primary me-1" href="{{ route('UserLoginForm') }}">Вход</a>
                                <a class="btn btn-outline-warning" href="{{ route('UserSignupForm') }}">Регистрация</a>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
