@extends('AdminPanel.layouts.main')
@section('main-section')
    <div class="container">
        <div class="container-fluid">
            <div class="mt-4 ">
                <h2>Properties</h2>
                <div aria-label="breadcrumb mt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">Недвижимость</li>
                        <li class="breadcrumb-item active">@if (!empty($pro))Редактирование @else Добавление @endif</li>
                        <div class="d-flex ms-auto">
                            <a class="btn btn-primary disabled" href="{{ route('add_properties') }}">Добавить</a>
                        </div>
                    </ol>
                </div>
            </div>
            <div class="mt-4">
                <form class="card" style="width:90%;" id="proForm" action="@if (!empty($pro)){{ route('properties_edited', $pro->id) }}@else{{ route('properties_added') }}@endif" method="POST"
                    enctype="multipart/form-data">
                    <div class="card-header">
                        <div class="d-flex">
                            <h4 class="">@if (!empty($pro))Редактирование @else Добавление @endif Недвижимости</h4>
                            <div class="ms-auto">
                                <button
                                    class="btn
                                    @if (!empty($pro)) btn-success
                                    @else btn-primary
                                    @endif"
                                    type="submit">@if (!empty($pro)) Обновить @else Подтвердить @endif
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            @csrf

                            <div class="row border-bottom border-2 m-auto mt-3">
                                <div class="col mb-2  mx-auto">
                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="1" name="featured"
                                                @if (!empty($pro)) @if ($pro->featured == 1) checked @endif @else {{ old('featured') ? 'checked' : '' }} @endif>
                                                <label class="form-check-label">
                                                    Рекомендации
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="1" name="public"
                                                @if (!empty($pro)) @if ($pro->public == 1) checked @endif @else {{ old('public') ? 'checked' : '' }} @endif>
                                                <label class="form-check-label">
                                                    Открытое
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <label for="" class="form-label"><i class="fas fa-home"></i> Название недвижимости</label>
                                            <input type="text" class="form-control" name="title"
                                                value="@if (!empty($pro)){{ $pro->title }}@else{{ old('title') }}@endif" required>
                                            <div class="text-danger fst-italic lh-1">* @error('title'){{ $message }} @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="" class="form-label"><i class="fas fa-tag"></i> Стоимость</label>
                                            <div class="input-group">
                                                <div class="input-group-text">₽</div>
                                                <input type="number" class="form-control" name="price" min="0"
                                                    max="99999999" value="@if (!empty($pro)){{ $pro->price }}@else{{ old('price') }}@endif" required>
                                            </div>
                                            <div class="text-danger fst-italic lh-1">* @error('price'){{ $message }} @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <label class="form-label"><i class="fas fa-sign"></i> Назначение</label>
                                            <div class="input-group">
                                                <label class="input-group-text">Выбор</label>
                                                <select class="form-select" name="purpose" required>
                                                    <option value="" selected>Выбрать...</option>
                                                    <option @if (!empty($pro)) @if ($pro->purpose == 'Продажа') selected @endif @else @if (old('purpose') == 'Продажа') selected @endif @endif value="Продажа">Продажа</option>
                                                    <option @if (!empty($pro)) @if ($pro->purpose == 'Аренда') selected @endif @else @if (old('purpose') == 'Аренда') selected @endif @endif value="Аренда">Аренда</option>
                                                    <option @if (!empty($pro)) @if ($pro->purpose == 'Сожительство') selected @endif @else @if (old('purpose') == 'Сожительство') selected @endif @endif value="Сожительство">Сожительство</option>
                                                </select>
                                            </div>
                                            <div class="text-danger fst-italic lh-1">* @error('purpose'){{ $message }} @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label"><i class="fas fa-cubes"></i> Категория</label>
                                            <div class="input-group">
                                                <label class="input-group-text">Выбор</label>
                                                <select class="form-select" name="category" required>
                                                    <option value="" selected>Выбрать...</option>
                                                    @foreach ($cate as $item)
                                                        @if (!empty($pro))
                                                            @if ($pro->category == $item->id)
                                                                <option selected value="{{ $item->id }}">
                                                                    {{ $item->name }}</option>
                                                            @else
                                                                <option value="{{ $item->id }}">{{ $item->name }}
                                                                </option>
                                                            @endif
                                                        @else
                                                            @if (old('category') == $item->id)
                                                                <option selected value="{{ $item->id }}">
                                                                    {{ $item->name }}</option>
                                                            @else
                                                                <option value="{{ $item->id }}">{{ $item->name }}
                                                                </option>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="text-danger fst-italic lh-1">* @error('category'){{ $message }} @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-3">
                                            <div class="form-label"><i class="fas fa-bed"></i> Спальня</div>
                                            <input type="number" class="form-control" value="@if (!empty($pro)){{ $pro->rooms }}@else{{ old('rooms') ?? 1 }}@endif"
                                                name="rooms" min="1" required>
                                            <div class="text-danger fst-italic lh-1">* @error('rooms'){{ $message }} @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-label"><i class="fas fa-shower"></i> Ванная</div>
                                            <input type="number" class="form-control" value="@if (!empty($pro)){{ $pro->bathrooms }}@else{{ old('bathrooms') ?? 1 }}@endif"
                                                name="bathrooms" min="1" required>
                                            <div class="text-danger fst-italic lh-1">* @error('bathrooms'){{ $message }} @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-label"><i class="fas fa-th-large"></i> Площадь</div>
                                            <div class="input-group">
                                                <label class="input-group-text">м²</label>
                                                <input type="number" class="form-control"
                                                    value="@if (!empty($pro)){{ $pro->area }}@else{{ old('area') ?? 10 }}@endif" name="area" min="10" required>
                                            </div>
                                            <div class="text-danger fst-italic lh-1">* @error('area'){{ $message }} @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-3">
                                            <label class="form-label"><i class="fas fa-city"></i> Город</label>
                                            <div class="input-group">
                                                <select class="form-select" name="city" required>
                                                    <option value="" selected>Выбрать...</option>
                                                    @foreach ($city as $item)
                                                        @if (!empty($pro))
                                                            @if ($pro->city == $item->id)
                                                                <option selected value="{{ $item->id }}">
                                                                    {{ $item->city }}</option>
                                                            @else
                                                                <option value="{{ $item->id }}">{{ $item->city }}
                                                                </option>
                                                            @endif
                                                        @else
                                                            @if (old('city') == $item->id)
                                                                <option selected value="{{ $item->id }}">
                                                                    {{ $item->city }}</option>
                                                            @else
                                                                <option value="{{ $item->id }}">{{ $item->city }}
                                                                </option>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="text-danger fst-italic lh-1">* @error('city'){{ $message }} @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <label class="form-label"><i class="fas fa-map"></i> адрес</label>
                                            <input type="text" class="form-control" value="@if (!empty($pro)){{ $pro->address }}@else{{ old('address') }}@endif"
                                                name="address" required>
                                            <div class="text-danger fst-italic lh-1">* @error('address'){{ $message }} @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label"><i class="fas fa-phone-alt"></i> Контактный телефон</label>
                                            <input type="tel" name="cont_ph" value="@if (!empty($pro)){{ $pro->cont_ph }}@else{{ old('cont_ph') }}@endif"
                                                class="form-control" required>
                                            <div class="text-danger fst-italic lh-1">* @error('cont_ph'){{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label"><i class="fas fa-envelope"></i> Контактная почта</label>
                                            <input type="email" name="cont_em" value="@if (!empty($pro)){{ $pro->cont_em }}@else{{ old('cont_em') }}@endif"
                                                class="form-control" required>
                                            <div class="text-danger fst-italic lh-1">* @error('cont_em'){{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-12 mb-2">
                                            <label for="" class="form-label mb-0"><i class="fas fa-shapes"></i> Условия</label>
                                            <p class="text-muted form-label">Используйте Ctrl + Лкм для множественного выбора
                                            </p>
                                            <select class="form-select" name="faci[]" multiple>
                                                @foreach ($faci as $item)
                                                    @if (!empty($pro_faci))
                                                        @if (in_array($item->slug_faci,$pro_faci))
                                                            <option selected value="{{ $item->slug_faci }}">{{ $item->faci }}
                                                            </option>
                                                        @else
                                                            <option value="{{ $item->slug_faci }}">{{ $item->faci }}
                                                            </option>
                                                        @endif
                                                    @else
                                                        <option value="{{ $item->slug_faci }}">{{ $item->faci }}
                                                        </option>
                                                    @endif

                                                @endforeach
                                            </select>
                                            <div class="text-danger fst-italic lh-1">@error('faci[]') * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-12 mb-2">
                                            <label for="" class="form-label"><i class="fas fa-info-circle"></i> Описание</label>
                                            <textarea class="form-control" rows="3"
                                                name="description">@if (!empty($pro)){{ $pro->description }}@else{{ old('description') }}@endif</textarea>
                                            <div class="text-danger fst-italic lh-1">@error('description') * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-12 mb-2">
                                            <label for="" class="form-label"><i class="fab fa-youtube"></i> Видео</label>
                                            <textarea class="form-control" rows="3"
                                                name="video">@if (!empty($pro)){{ $pro->video }}@else{{ old('video') }}@endif</textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-12 mb-2">
                                            <label for="" class="form-label"><i class="fas fa-map-marked-alt"></i> Карта</label>
                                            <textarea class="form-control" rows="3"
                                                name="map">@if (!empty($pro)){{ $pro->map }}@else{{ old('map') }}@endif</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mx-auto mb-2 ps-2 border-start">
                                    <div class="col-md-12 mb-2">
                                        <label for="" class="form-label mb-0"><i class="fas fa-image"></i>Главное изображение объекта недвижимости</label>
                                        <p class="text-muted form-label">Рекомендованное разрешение [1903 x 513] Изображения
                                        </p>
                                        <div class="input-group">
                                            <input type="file" class="form-control" name="fe_image" @if(empty($pro->fe_image)) required @endif>
                                        </div>
                                        <div class="text-danger fst-italic lh-1">* @error('fe_image'){{ $message }} @enderror
                                        </div>
                                    </div>
                                    @if (!empty($pro->fe_image))
                                        <div class="mb-2">
                                            <label for="" class="form-label">Старое изображение</label>
                                            <img class="form-control"
                                                src="{{ asset('/storage/property/' . $pro->fe_image) }}" alt="Error">
                                        </div>
                                    @endif
                                    <div class="col-md-12 mb-2">
                                        <label for="" class="form-label mb-0"><i class="far fa-image"></i>Изображение объекта недвижимости</label>
                                        <p class="text-muted form-label">Лучшее разрешение[1920 x 1440] и соотношение [4:3] Изображения
                                        </p>
                                        <div class="input-group">
                                            <input type="file" class="form-control" name="image" @if (empty($pro->image))required @endif>
                                        </div>
                                        <div class="text-danger fst-italic lh-1">* @error('image'){{ $message }} @enderror
                                        </div>
                                    </div>
                                    @if (!empty($pro->image))
                                        <div class="mb-2">
                                            <label for="" class="form-label">Старое изображение</label>
                                            <img class="form-control"
                                                src="{{ asset('/storage/property/' . $pro->image) }}" alt="Error">
                                        </div>
                                    @endif
                                    <div class="col-md-12 mb-2">
                                        <label for="" class="form-label"><i class="fas fa-drafting-compass"></i> План</label>
                                        <div class="input-group">
                                            <input type="file" class="form-control" name="floorplan">
                                        </div>
                                        <div class="text-danger fst-italic lh-1">@error('floorplan') * {{ $message }} @enderror
                                        </div>
                                    </div>
                                    @if (!empty($pro->floorplan))
                                        <div class="mb-2">
                                            <label for="" class="form-label">Старый план</label>
                                            <img class="form-control"
                                                src="{{ asset('/storage/property/' . $pro->floorplan) }}" alt="Error">
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12">
                                <button
                                    class="btn
                                    @if (!empty($pro)) btn-success
                                    @else btn-primary
                                    @endif"
                                    type="submit">@if (!empty($pro)) Обновить @else Добавить @endif
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
