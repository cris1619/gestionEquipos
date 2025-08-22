<?php

use App\Http\Controllers\EquipoController;
use App\Http\Controllers\JugadorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');})->name('welcome');
Route::get('/Equipos/index', [EquipoController::class, 'index'])->name('equipos.index');
Route::get('/Equipos/create', [EquipoController::class, 'create'])->name('equipos.create');
Route::post('/Equipos/store', [EquipoController::class, 'store'])->name('equipos.store');
Route::post('/Equipos/destroy/{id}', [EquipoController::class, 'destroy'])->name('equipos.destroy');
Route::get('/Equipos/edit/{id}', [EquipoController::class, 'edit'])->name('equipos.edit');
Route::post('/Equipos/update/{id}', [EquipoController::class, 'update'])->name('equipos.update');

Route::get('/Jugadores/index', [JugadorController::class, 'index'])->name('Jugadores.index');
Route::get('/Jugadores/create', [JugadorController::class, 'create'])->name('Jugadores.create');
Route::post('/Jugadores/store', [JugadorController::class, 'store'])->name('Jugadores.store');
