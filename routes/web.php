<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OficinaController;
use App\Http\Controllers\EmpleadoController;

//Route::resource('oficinas', controller: OficinaController::class);
//Route::resource('oficinas/{oficina}/empleados', controller: EmpleadoController::class);
Route::middleware(['auth'])->group(function () {
    Route::resource('oficinas', OficinaController::class);
    Route::resource('oficinas/{oficina}/empleados', EmpleadoController::class);
});
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/inscribirse', function () { return view('inscribirse'); })->name('inscribirse');
Route::get('/welcome', function () { return view('welcome'); })->name('welcome');
Route::get('/sobreNosotros', function () { return view('sobreNosotros'); })->name('sobreNosotros');

