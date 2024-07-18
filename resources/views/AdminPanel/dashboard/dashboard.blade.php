@extends('AdminPanel.layouts.main')
@section('main-section')
    <div class="container">
        <div class="container-fluid">
            <div class="mt-4">
                <h2>Админ - панель</h2>
                <div aria-label="breadcrumb mt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">Администратор</li>
                        <li class="breadcrumb-item active">Панель</li>
                        {{-- <div class="d-flex ms-auto">
                            <a class="btn btn-primary" href="{{ route('add_properties') }}">Добавить</a>
                        </div> --}}
                    </ol>
                </div>
            </div>
            <div class="{{ session()->get('msgst') ? 'alert  alert-' . session()->get('msgst') : 'm-0 border-0 p-0' }}">
                {{ session()->get('msg') ?? null }}</div>
            <div class="mt-4">
                <div class="row mb-3">
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header bg-primary">
                                <h4>Пользователей +{{ $newUsers->count() }}</h4>
                            </div>
                            <div class="card-body bg-primary bg-gradient bg-opacity-75 text-dark">
                                <p class="m-0">Новых пользователей в этом месяце
                                    <a class="stretched-link link-dark" href="{{ route('list_users') }}">
                                        подробнее
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card rounded">
                            <div class="card-header bg-success">
                                <h4>Комментарии +{{ $newReviews->count() }}</h4>
                            </div>
                            <div class="card-body bg-success bg-gradient bg-opacity-75 text-dark">
                                <p class="m-0">Новых комментариев в этом месяце
                                    <a class="stretched-link link-dark" href="{{ route('list_reviews') }}">
                                        подробнее
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header bg-warning">
                                <h4>Недвижимость +{{ $newProperty->count() }}</h4>
                            </div>
                            <div class="card-body bg-warning bg-gradient bg-opacity-75 text-dark">
                                <p class="m-0">Новой недвижимости в этом месяце
                                    <a class="stretched-link link-dark" href="{{ route('list_properties') }}">
                                        подробнее
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    {{-- если чот ещё над смотреть --}}
                    {{-- <div class="col-3">
                        <div class="card">
                            <div class="card-header bg-info">
                                <h4>An Item</h4>
                            </div>
                            <div class="card-body bg-info bg-gradient bg-opacity-75 text-dark">
                                <p class="m-0">description</p>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="row mb-3">
                    <h4>Подробнее</h4>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex">
                                    <h5>Пользователи</h5>
                                    <a class="ms-auto btn btn-sm btn-outline-primary" href="{{ route('list_users') }}">
                                        +</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    @forelse ($newUsers as $User)
                                        @if ($loop->index < 6)
                                            <div class="col-3 mb-2">
                                                <img class="rounded-circle"
                                                    src="{{ !empty($User->Data->image) ? asset('/storage/userdata/' . $User->Data->image) : asset('stockUser.png') }}"
                                                    width="60px" alt="No Img">
                                            </div>
                                            <div class="col-9 mb-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="w-100">
                                                        <div class="fs-6">{{ $User->name }}</div>
                                                        <a class="text-muted"
                                                            href="mailto:{{ $User->email }}">{{ $User->email }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @empty
                                        <div class="col-12">
                                            <h6>Нет новых пользователей в этом месяце :/</h6>
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex">
                                    <h5>Комментарии</h5>
                                    <a class="ms-auto btn btn-sm btn-outline-success" href="{{ route('list_reviews') }}">
                                        +</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    @forelse ($newReviews as $review)
                                        @if ($loop->index < 6)
                                            <div class="col-3 text-center mb-2">
                                                <img class="rounded-circle"
                                                    src="{{ !empty($review->Users[0]->Data->image)? asset('/storage/userdata/' . $review->Users[0]->Data->image): asset('stockUser.png') }}"
                                                    width="60px" alt="No Img">
                                            </div>
                                            <div class="col-9 mb-2">
                                                <div class="fs-6">{{ $review->Users[0]->name }}</div>
                                                {{ $review->review }}
                                            </div>
                                        @endif
                                    @empty
                                        <div class="col-12">
                                            <h6>Комментариев нет :/</h6>
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex">
                                    <h5>Недвижимость</h5>
                                    <a class="ms-auto btn btn-sm btn-outline-warning"
                                        href="{{ route('list_properties') }}">
                                        +</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    @forelse ($newProperty as $property)
                                        @if ($loop->index < 6)
                                            <div class="col-3 mb-2">
                                                <img width="60px" class="rounded-circle"
                                                    src="{{ asset('/storage/property/' . $property->image) }}"
                                                    alt="Error">
                                            </div>
                                            <div class="col-9 mb-2">
                                                <div class="fs-6">{{ $property->title }}</div>
                                                <a class="text-muted"
                                                    href="{{ route('edit_properties', $property->id) }}">Подробнее</a>
                                            </div>
                                        @endif
                                    @empty
                                        <div class="col-12">
                                            <h6>Недвижимости нет :/</h6>
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
