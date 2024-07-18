<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API роуты
|--------------------------------------------------------------------------
|
| Регистрация маршрутов API для app 
| Маршруты загружаются RouteServiceProvider внутри группы, которая назначается "api"
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
