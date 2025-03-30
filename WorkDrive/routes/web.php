<?php

use App\Http\Controllers\Principal\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/layout', [HomeController::class, 'index'])->name('layout');
Route::get('/home', [HomeController::class, 'home'])->name('home');
#Route::get('/home', function() { return "Inicio"; })->name('home');
Route::get('/reports', function() { return "Reportes"; })->name('reports');
Route::get('/stats', function() { return "Estadísticas"; })->name('stats');
Route::get('/messages', function() { return "Mensajes"; })->name('messages');
Route::get('/gallery', function() { return "Galería"; })->name('gallery');
Route::get('/calendar', function() { return "Calendario"; })->name('calendar');
Route::get('/users', function() { return "Usuarios"; })->name('users');
Route::get('/settings', function() { return "Configuración"; })->name('settings');
