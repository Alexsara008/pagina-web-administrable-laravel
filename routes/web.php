<?php

use Illuminate\Support\Facades\Route;

Route::get('/' ,[App\Http\Controllers\PortafolioController::class, 'index']);

Route::get('/sliders', [PortafolioController::class, 'showSliders']); // Ruta para sliders



Auth::routes();

Route::resource('/proyectos', App\Http\Controllers\ProyectoController::class);

Route::resource('/sliders', App\Http\Controllers\SliderController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
