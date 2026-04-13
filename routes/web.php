<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

// 🟢 HOME (MAIN)
Route::get('/', function () {
    return view('main'); // cambiamos welcome por main
});

// 🟢 LOGIN
Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [UsuarioController::class, 'login']);

// 🟢 REGISTRO
Route::get('/registros', function () {
    return view('registros');
});

Route::post('/registro', [UsuarioController::class, 'store']);

// 🔴 LOGOUT
Route::get('/logout', function () {

    session()->forget('logueado');
    session()->forget('usuario');

    return redirect('/')->with('success', 'Sesión cerrada');
});

// 🛒 CARRITO (PROTEGIDO)
Route::get('/carrito', function () {

    if(!session('logueado')){
        return redirect('/login');
    }

    return view('carrito');
});

// 📄 OTRAS VISTAS
Route::get('/equipo', function () {
    return view('equipo');
});



MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=farmacialaravelctes@gmail.com
MAIL_PASSWORD=xnbvonqkwschkbjs
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=farmacialaravelctes@gmail.com
MAIL_FROM_NAME="FarmaciaCtes"