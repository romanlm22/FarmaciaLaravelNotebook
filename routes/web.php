<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return view('main'); // cambiamos welcome por main
});

Route::get('/registros', function () {
    return view('registros');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/acercaNosotros', function () {
    return view('acercaNosotros');
});

Route::get('/categoria1', function () {
    return view('categoria1');
});

Route::get('/categoria3', function () {
    return view('categoria3');
});

Route::get('/categoria2', function () {
    return view('categoria2');
});

Route::get('/carrito', function () {
    return view('carrito');
});

Route::get('/terminos', function () {
    return view('terminos');
});

