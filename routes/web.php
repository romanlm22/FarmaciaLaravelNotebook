<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return view('main'); // cambiamos welcome por main
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [UsuarioController::class, 'login']);

Route::get('/registros', function () {
    return view('registros');
});

Route::post('/registro', [UsuarioController::class, 'store']);

Route::get('/logout', function () {

    session()->forget('logueado');
    session()->forget('usuario');

    return redirect('/')->with('success', 'Sesión cerrada');
});

Route::get('/carrito', function () {

    if(!session('logueado')){
        return redirect('/login');
    }

    return view('carrito');
});

// 📄 OTRAS VISTAS
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

