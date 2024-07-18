@extends('AdminPanel.layouts.main')
@section('main-section')
    <div class="container">
        <div class="container-fluid">
            <div class="mt-4 ">
                <h2>Недвижимость</h2>
                <div aria-label="breadcrumb mt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">Недвижимость</li>
                        <li class="breadcrumb-item active">Список</li>
                        <div class="d-flex ms-auto">
                            <a class="btn btn-primary" href="{{ route('add_properties') }}">Добавить</a>
                        </div>
                    </ol>
                </div>
            </div>
            <div class="{{ session()->get('msgst') ? 'alert  alert-' . session()->get('msgst') : 'm-0 border-0 p-0' }}">
                {{ session()->get('msg') ?? null }}</div>
            <div class="mt-4">
                <table class="table table-hover table-striped" id="data">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Доступность</th>
                            <th scope="col"></th>
                            <th scope="col">Цена(₽)</th>
                            <th scope="col">Рек.</th>
                            <th scope="col">Назнач.</th>
                            <th scope="col">Категория</th>
                            <th scope="col">Изображение</th>
                            <th scope="col">Город</th>
                            <th scope="col">Галлерея</th>
                            <th scope="col"></th>
                            <th scope="col">Действие</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pro as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <th scope="row"
                                    @if ($item->public == 1) class="text-success">Public @else class="text-danger"> Скрыто @endif</th>
                                <th scope="row">{{ $item->title }}</th>
                                <th scope="row">{{ number_format($item->price) }}</th>
                                <th scope="row"
                                    @if ($item->featured == 1) class="text-success">Active @else class="text-danger"> Выключено @endif</th>
                                <th scope="row">{{ ucfirst($item->purpose) }}</th>
                                <th scope="row">{{ $item->Cate->name }}</th>
                                <th scope="row"><img height="30rem" class="rounded" style="cursor: pointer"
                                        data-fancybox="gallery"
                                        data-src="{{ asset('/storage/property/' . $item->image) }}"
                                        src="{{ asset('/storage/property/' . $item->image) }}" alt="Error"></th>
                                <th scope="row">{{ $item->City->city }}</th>
                                <th scope="row"><a href="{{ route('get_gallary', $item->id) }}"
                                        class="btn btn-info btn-sm"><i class="fas fa-images"></i></a></th>
                                <th scope="row"><a href="{{ route('get_reviews', $item->id) }}"
                                        class="btn btn-secondary btn-sm"><i class="fas fa-comment-alt"></i></a></th>
                                <th scope="row">
                                    <a class="btn btn-success btn-sm" href="{{ route('edit_properties', $item->id) }}">
                                        <i class="fa fa-edit" aria-hidden="true"></i></a>
                                    @if (session()->get('AdminUser')['type'] == 'R')
                                        <a class="btn btn-danger btn-sm" onclick="return confirm('удалить?')"
                                            href="{{ route('del_properties', $item->id) }}">
                                            <i class="fa fa-trash" aria-hidden="true"></i></a>
                                    @endif
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('.alert').fadeOut(3000);
            Fancybox.bind("gallery", {});
        });
    </script>
@endsection
