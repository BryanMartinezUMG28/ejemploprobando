<?php

use App\Http\Controllers\TransportesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TransportesController::class, 'index'])->name('transportes.index');

Route::get('/create', [TransportesController::class, 'create'])->name('transportes.create');

Route::get('/edit', [TransportesController::class, 'edit'])->name('transportes.edit');
