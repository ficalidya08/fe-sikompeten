<?php

use Illuminate\Support\Facades\Route;

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard-opd', function () {
    return view('dashboard-opd');
});

Route::get('/pengajuan-usulan', function () {
    return view('pengajuan-usulan');
});

Route::get('/form-usulan-1', function () {
    return view('form-usulan-1');
});

Route::get('/form-usulan-2', function () {
    return view('form-usulan-2');
});

Route::get('/form-usulan-3', function () {
    return view('form-usulan-3');
});
