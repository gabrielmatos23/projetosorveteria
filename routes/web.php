<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('helloword');
});

Route::get('/teste', function () {
    return 'Servidor funcionando';
});

Route::get('/inicial', function () {
    return view('inicial');
});

Route::get('/buscar', function () {
    return view('bucar');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/produtos', function () {
    return view('produtos');
});

Route::get('/sobre', function () {
    return view('sobre');
});