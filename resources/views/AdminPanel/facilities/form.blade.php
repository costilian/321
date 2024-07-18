@extends('AdminPanel.layouts.main')
@section('main-section')
    <div class="container">
        <div class="container-fluid">
            <div class="mt-4 ">
                <h2>Условия</h2>
                <div aria-label="breadcrumb mt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">Условия</li>
                        <li class="breadcrumb-item active">@if (!empty($faci))Редактировать @else Добавить @endif</li>
                        <div class="d-flex ms-auto">
                            <a class="btn btn-primary disabled" href="{{ route('add_category') }}">Добавить</a>
                        </div>
                    </ol>
                </div>
            </div>
            <div class="mt-4">
                <div class="card" style="width:90%;">
                    <div class="card-header">
                        <h4 class="">@if (!empty($faci))Редактирование @else Добавление @endif Условия</h4>
                    </div>
                    <div class="card-body">
                        <form class="row g-3" action="@if (!empty($faci)){{ route('facilities_edited', $faci->id) }}@else{{ route('facilities_added') }}@endif" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-8">
                                <label for="" class="form-label">Условия</label>
                                <input type="text" class="form-control" name="faci" value="@if (!empty($faci)){{ $faci->faci }}@else{{ old('faci') }}@endif"
                                    required>
                                <div class="text-danger">* @error('faci'){{ $message }} @enderror</div>
                            </div>
                            <div class="col-md-5">
                                <label for="" class="form-label">Само условие</label>
                                <input type="text" class="form-control" name="fa" value="@if (!empty($faci)){{ $faci->fa }}@else{{ old('fa') }}@endif">
                                <div class="text-danger">@error('fa') * {{ $message }} @enderror</div>
                            </div>
                            <div class="col-md-3">
                                <label for="" class="form-label">Цвет</label>
                                <div class="input-group">
                                    <select class="form-select" name="color">
                                        <option @if (!empty($faci)){{ $faci->color == '' ? 'selected' : '' }}@endif value="">Выбрать...</option>
                                        <option @if (!empty($faci)){{ $faci->color == 'primary' ? 'selected' : '' }}@endif class="bg-primary" value="primary">Синий
                                        </option>
                                        <option @if (!empty($faci)){{ $faci->color == 'secondary' ? 'selected' : '' }}@endif class="bg-secondary" value="secondary">Серый
                                        </option>
                                        <option @if (!empty($faci)){{ $faci->color == 'success' ? 'selected' : '' }}@endif class="bg-success" value="success">Зеленный
                                        </option>
                                        <option @if (!empty($faci)){{ $faci->color == 'danger' ? 'selected' : '' }}@endif class="bg-danger" value="danger">Красный</option>
                                        <option @if (!empty($faci)){{ $faci->color == 'warning' ? 'selected' : '' }}@endif class="bg-warning" value="warning">Желтый
                                        </option>
                                        <option @if (!empty($faci)){{ $faci->color == 'info' ? 'selected' : '' }}@endif class="bg-info" value="info">Голубоый
                                        </option>
                                        <option @if (!empty($faci)){{ $faci->color == 'light' ? 'selected' : '' }}@endif class="bg-light" value="light">Белый
                                        </option>
                                        <option @if (!empty($faci)){{ $faci->color == 'dark' ? 'selected' : '' }}@endif class="bg-dark text-white"
                                            value="dark">Субхан</option>
                                    </select>
                                </div>
                                <div class="text-danger">* @error('color'){{ $message }} @enderror</div>
                            </div>
                            <div class="col-12">
                                <button
                                    class="btn
                                @if (!empty($faci)) btn-success
                                @else btn-primary
                                @endif"
                                    type="submit">@if (!empty($faci)) Редактировать @else Добавить @endif</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
