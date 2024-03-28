<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\ProfesorController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::prefix('admin')->group(function(){
    Route::post('/inicio',[LoginController::class, 'login'])->name('admin.login');
    Route::get('/gestionUsuarios',[AdminController::class,'gestionUsuarios'])->name('admin.gestionUsuarios');
    Route::get('/crearEstudiante',[EstudianteController::class,'crearEstudiante'])->name('admin.crearEstudiante');
    Route::get('/crearProfesor',[ProfesorController::class,'crearProfesor'])->name('admin.crearProfesor');
});