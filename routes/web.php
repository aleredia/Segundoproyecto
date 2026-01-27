<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;

Route::get('/hello', HomeController::class);
Route::get('post/mensaje', [PostController::class,'Mensaje']);

Route::get('/', function () {
    return view('welcome');
});
