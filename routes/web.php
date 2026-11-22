<?php

use Illuminate\Support\Facades\Route;

Route::view('/admin/dashboard-admin', 'admin.dashboard-admin')->name('admin.dashboard-admin');
Route::view('/auth/login', 'auth.login')->name('auth.login');
Route::view('/auth/register', 'auth.register')->name('auth.register');
Route::view('/', 'index')->name('index');
Route::view('/owner/dashboard-owner', 'owner.dashboard-owner')->name('owner.dashboard-owner');
Route::view('/owner/laporan-booking', 'owner.laporan-booking')->name('owner.laporan-booking');
Route::view('/owner/laporan-denda', 'owner.laporan-denda')->name('owner.laporan-denda');
Route::view('/owner/laporan-fnb', 'owner.laporan-fnb')->name('owner.laporan-fnb');
Route::view('/owner/laporan-sewa-ps', 'owner.laporan-sewa-ps')->name('owner.laporan-sewa-ps');
Route::view('/user/booking/booking-form', 'user.booking.booking-form')->name('user.booking.booking-form');
Route::view('/user/booking/booking-member', 'user.booking.booking-member')->name('user.booking.booking-member');
Route::view('/user/booking/metode-pembayaran', 'user.booking.metode-pembayaran')->name('user.booking.metode-pembayaran');
Route::view('/user/booking/pembayaran-qris', 'user.booking.pembayaran-qris')->name('user.booking.pembayaran-qris');
Route::view('/user/booking/pesanan-berhasil', 'user.booking.pesanan-berhasil')->name('user.booking.pesanan-berhasil');
Route::view('/user/cart', 'user.cart')->name('user.cart');
Route::view('/user/fnb/lanjut-pemesanan', 'user.fnb.lanjut-pemesanan')->name('user.fnb.lanjut-pemesanan');
Route::view('/user/fnb/metode-pembayaran', 'user.fnb.metode-pembayaran')->name('user.fnb.metode-pembayaran');
Route::view('/user/fnb/pembayaran-qris', 'user.fnb.pembayaran-qris')->name('user.fnb.pembayaran-qris');
Route::view('/user/fnb/pesan-fnb', 'user.fnb.pesan-fnb')->name('user.fnb.pesan-fnb');
Route::view('/user/fnb/pesanan-berhasil', 'user.fnb.pesanan-berhasil')->name('user.fnb.pesanan-berhasil');
Route::view('/user/home', 'user.home')->name('user.home');
Route::view('/user/notification', 'user.notification')->name('user.notification');
Route::view('/user/profile', 'user.profile')->name('user.profile');
