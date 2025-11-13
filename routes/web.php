<?php

use Illuminate\Support\Facades\Route;

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard-opd', function () {
    return view('Pages.admin.dashboard-opd');
});

Route::get('/pengajuan-usulan', function () {
    return view('Pages.admin.pengajuan-usulan');
});

Route::get('/detail-usulan', function () {
    return view('Pages.admin.detail-usulan');
});

Route::get('/form-usulan', function () {
    return view('Pages.admin.form-usulan');
});

Route::get('/review-usulan', function () {
    return view('Pages.admin.review-usulan');
});

Route::get('/notif-usulan', function () {
    return view('Pages.admin.notif-usulan');
});

Route::get('/dashboard-user', function () {
    return view('Pages.user.dashboard-user');
});

Route::get('/daftar-usulan', function () {
    return view('Pages.admin.daftar-usulan');
});

Route::get('/laporan-kegiatan', function () {
    return view('Pages.admin.laporan-kegiatan');
});

Route::get('/detail-laporan', function () {
    return view('Pages.admin.detail-laporan');
});

Route::get('/form-laporan', function () {
    return view('Pages.admin.form-laporan');
});

Route::get('/review-laporan', function () {
    return view('Pages.admin.review-laporan');
});

Route::get('/notif-laporan', function () {
    return view('Pages.admin.notif-laporan');
});

Route::get('/dashboard-superadmin', function () {
    return view('Pages.superadmin.dashboard-superadmin');
});

Route::get('/daftar-usulan-superadmin', function () {
    return view('Pages.superadmin.daftar-usulan-superadmin');
});

Route::get('/daftar-laporan-superadmin', function () {
    return view('Pages.superadmin.daftar-laporan-superadmin');
});

Route::get('/tambah-kop', function () {
    return view('Pages.tambah-kop');
});

Route::get('/profile-show', function () {
    return view('Pages.profile-show');
});

Route::get('/edit-usulan', function () {
    return view('Pages.admin.edit-usulan');
});

Route::get('/edit-laporan', function () {
    return view('Pages.admin.edit-laporan');
});

Route::get('/form-balasan', function () {
    return view('Pages.superadmin.form-balasan-superadmin');
});

Route::get('/review-balasan', function () {
    return view('Pages.superadmin.review-balasan-superadmin');
});

Route::get('/daftar-balasan', function () {
    return view('Pages.superadmin.daftar-balasan-superadmin');
});

Route::get('/notif-balasan', function () {
    return view('Pages.superadmin.notif-balasan-superadmin');
});

Route::get('/user-manajemen', function () {
    return view('Pages.superadmin.user-manajemen');
});

Route::get('/edit-user', function () {
    return view('Pages.superadmin.edit-user');
});

Route::get('/tambah-user', function () {
    return view('Pages.superadmin.tambah-user');
});