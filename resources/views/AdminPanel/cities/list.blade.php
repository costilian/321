@extends('AdminPanel.layouts.main')
@section('main-section')
    <div class="container">
        <div class="container-fluid">
            <div class="mt-4 ">
                <h2>Города</h2>
                <div aria-label="breadcrumb mt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">Города</li>
                        <li class="breadcrumb-item active">Список</li>
                        <div class="d-flex ms-auto">
                            <a class="btn btn-primary" href="{{ route('add_cities') }}">Добавить</a>
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
                            <th scope="col">Название города</th>
                            <th scope="col">Статус</th>
                            <th scope="col">Действие</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($city as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <th scope="row">{{ $item->city }}</th>
                                <th scope="row"
                                    @if ($item->status == 1) class="text-success">Доступен @else class="text-danger"> Не доступен @endif</th>
                                <th scope="row">
                                    <a class="btn btn-success btn-sm" href="{{ route('edit_cities', $item->id) }}"><i
                                            class="fa fa-edit" aria-hidden="true"></i></a>
                                    @if (session()->get('AdminUser')['type'] == 'R')
                                        <a class="btn btn-danger btn-sm" onclick="return confirm('Sure to delete?')"
                                            href="{{ route('del_cities', $item->id) }}"><i class="fa fa-trash"
                                                aria-hidden="true"></i></a>
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
        });
    </script>
@endsection
