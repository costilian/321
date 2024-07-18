@extends('AdminPanel.layouts.main')
@section('main-section')
    <div class="container">
        <div class="container-fluid">
            <div class="mt-4 ">
                <h2>{{ $pro->title ?? '' }} Комментарии</h2>
                <div aria-label="breadcrumb mt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">Комментарии</li>
                        <li class="breadcrumb-item active">Список</li>
                    </ol>
                </div>
            </div>
            <div class="{{ session()->get('msgst') ? 'alert  alert-' . session()->get('msgst') : 'm-0 border-0 p-0' }}">
                {{ session()->get('msg') ?? null }}
            </div>
            <div class="mt-4">
                <table class="table table-hover table-striped" id="data">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Недвижимость</th>
                            <th scope="col">Пользователь</th>
                            <th scope="col">Комментарий</th>
                            <th scope="col">Действие</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($reviews as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <th scope="row">{{ $item->Property->title }}</th>
                                <th scope="row">{{ $item->Users[0]->name }}</th>
                                <th scope="row">
                                    <p>{{ $item->review }}</p>
                                </th>
                                <th scope="row">
                                    <a class="btn btn-danger btn-sm" onclick="return confirm('Удалить?')"
                                        href="{{ route('del_reviews', $item->id) }}">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </a>
                                </th>
                            </tr>
                        @empty
                            <tr>
                                <th colspan="4" class="text-center">Комментариев нет</th>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection
