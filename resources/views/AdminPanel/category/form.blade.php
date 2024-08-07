@extends('AdminPanel.layouts.main')
@section('main-section')
    <div class="container">
        <div class="container-fluid">
            <div class="mt-4 ">
                <h2>Категории</h2>
                <div aria-label="breadcrumb mt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">Категории</li>
                        <li class="breadcrumb-item active">@if (!empty($cate))Редактирование @else Добавить @endif</li>
                        <div class="d-flex ms-auto">
                            <a class="btn btn-primary disabled" href="{{ route('add_category') }}">Добавить</a>
                        </div>
                    </ol>
                </div>
            </div>
            {{-- <h1>This is Your Category</h1> --}}
            <div class="mt-4">
                <div class="card" style="width:90%;">
                    <div class="card-header">
                        <h4 class="">@if (!empty($cate))Редактировать @else Добавить @endif Категорию</h4>
                    </div>
                    <div class="card-body">
                        <form class="row g-3" action="@if (!empty($cate)){{ route('category_edited', $cate->id) }}@else{{ route('category_added') }}@endif" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="col">

                                <div class="col-md-12 mb-2">
                                    <label for="" class="form-label">Название категории</label>
                                    <input type="text" class="form-control" name="name" value="@if (!empty($cate)){{ $cate->name }}@else{{ old('name') }}@endif"
                                        required>
                                    <div class="text-danger">* @error('name') {{ $message }} @enderror</div>
                                </div>
                                <div class="col-md-12">
                                    <label for="" class="form-label">Изображение категории</label>
                                    <p class="text-muted form-label">Для лучшего качества загружайте изображение в формате [400 x 225]</p>
                                    <div class="input-group">
                                        <input type="file" class="form-control" name="image" id=""
                                            @if (empty($cate))required @endif>
                                    </div>
                                    <div class="text-danger mt-0">* @error('image') {{ $message }} @enderror</div>
                                </div>

                            </div>
                            <div class="col-md-4">
                                @if (!empty($cate))
                                    <label for="" class="form-label">Старое изображение</label>
                                    <img class="form-control" src="{{ asset('/storage/images/' . $cate->image) }}"
                                        alt="Error">
                                @endif
                            </div>
                            <div class="col-12">
                                <button class="btn @if (!empty($cate)) btn-success @else btn-primary @endif" type="submit">@if (!empty($cate)) Обновить @else Подтвердить @endif</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
