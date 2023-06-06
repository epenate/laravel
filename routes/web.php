<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/productos', function () {
    return "Hola Mundo ";
});*/

Route::get('/productos/crear',[App\Http\Controllers\productosController::class,'crear']);

Route::get('/productos',[App\Http\Controllers\productosController::class,'index']);


Route::get('/productos/mostrar',[App\Http\Controllers\productosController::class,'mostrar']);



Route::get('/productos/lista',[App\Http\Controllers\productosController::class,'lista']);

//Route::view('/product', 'productos',['productos'=>$productos])->name('productos');

Route::get('/product', [App\Http\Controllers\productosController::class,'listaProd']);
Route::post('/productos/dataformulario', [App\Http\Controllers\productosController::class,'dataformulario'])->name('productos.formdata');


Route::get('/app', function (){
    return view ('app',['nombre'=>'Juan Carlos Polanco']);
});


Route::get('/home', function (){
    return view('home');
});

Route::get('/about', function (){
    return view('about');
});


