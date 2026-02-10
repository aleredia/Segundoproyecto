<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;

Route::get('/hello', HomeController::class);
Route::get('post/mensaje', [PostController::class,'Mensaje']);
Route::get('post/about/{param}/{name?}', [PostController::class,'About']);
Route::get('post/contacto', [PostController::class,'Contacto']);
Route::get('/Principal', [PrincipalController::class,'index']);
Route::get('/Llamado', [PostController::class,'llamado_componente']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/{x}',function($x=null){
    return "Hello World! {$x}";
})->where('x','\w+');

Route::get('/principal',function(){
    return 'Bienvenido a la página principal';
});

Route::get('/about/{param?}',function($p=null){
if (($p==null)||(empty($p))){
    return "No se ingresó ningún parámetro";
}    
return "El parámetro ingresado es: {$p}";
})->where('x','\w+');