@extends('layouts.app')
@section('content_box')
    <div class="container">
        <div class="py-5">
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="card mb-3 p-0">
                        <div class="card-header">
                            <h3>Смена пароля</h3>
                        </div>
                        <form class="row" action="{{ route('user_save_password') }}" method="POST">
                            @csrf
                            <div class="col-8">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="mb-3">
                                            <div class="col-12 mb-2">
                                                <label class="form-label h6" for="">Старый пароль</label>
                                                <input class="form-control" name="old_password" type="password"
                                                    placeholder="Введите старый пароль">
                                                @error('old_password')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="row">
                                                <div class="col-6 mb-2">
                                                    <label class="form-label h6" for="">Смена пароля</label>
                                                    <input class="form-control" name="new_password" type="password"
                                                        placeholder="Введите новый пароль">
                                                    @error('new_password')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-6 mb-2">
                                                    <label class="form-label h6" for="">Подтвердить новый пароль</label>
                                                    <input class="form-control" name="new_password_confirmation"
                                                        type="password" placeholder="Введите снова новый пароль">
                                                    @error('new_password_confirmation')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <button type="submit" class="btn btn-success"
                                                href="{{ route('editUserProfile') }}">
                                                <i class="fa fa-floppy-o" aria-hidden="true"></i> Сменить пароль</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
