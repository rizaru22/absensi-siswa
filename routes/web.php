<?php

use App\Livewire\Login;

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', \App\Livewire\Login::class)->name('login');
Route::get('/dash-admin', \App\Livewire\Admin\DashboardAdmin::class)->middleware('auth')->name('dashboard.admin');
Route::get('/logout', [\App\Http\Controllers\Logout::class, 'logout'])->middleware('auth')->name('logout');
Route::get('/kelas', \App\Livewire\Admin\Kelas::class)->middleware('auth')->name('kelas');