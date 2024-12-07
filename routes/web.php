<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Table_user_controller;
use App\Http\Controllers\table_tp_controller;

// Route::get('/', [Table_user_controller::class, 'index'])->name('table_user');
// Route::get('/edit_user/{id}', [Table_user_controller::class, 'edit'])->name('edit_user');
// Route::post('/update_user/{id}', [Table_user_controller::class, 'update'])->name('update_user');
// Route::get('/delete_user/{id}', [Table_user_controller::class, 'delete'])->name('delete_user');

Route::get('/', [table_tp_controller::class, 'index'])->name('table_tp');
Route::get('/tambah_tp', [table_tp_controller::class, 'tambah'])->name('tambah_tp');
Route::post('/tambah_tp', [table_tp_controller::class, 'store'])->name('tp.store');
Route::get('/edit_tp/{id}', [table_tp_controller::class, 'edit'])->name('edit_tp');
Route::post('/update_tp/{id}', [table_tp_controller::class, 'update'])->name('update_tp');
Route::get('/delete_tp/{id}', [table_tp_controller::class, 'delete'])->name('delete_tp');