<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});

Route::get('/accesorios', function () {
    return view('accesorios');
});

Route::get('/buzos', function () {
    return view('buzo');
});

Route::get('/camisas', function () {
    return view('camisa');
});

Route::get('/camisetas', function () {
    return view('camiseta');
});

Route::get('/pantalones', function () {
    return view('pantalon');
});
