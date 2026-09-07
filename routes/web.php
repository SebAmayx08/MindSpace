<?php

use Illuminate\Support\Facades\Route;

// Página Principal
Route::get('/', function () {
    return view('home');
})->name('home');

// Página de Recursos
Route::get('/recursos', function () {
    return view('recursos');
})->name('recursos');

// Página de Contacto
Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');