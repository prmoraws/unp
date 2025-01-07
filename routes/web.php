<?php

use App\Livewire\{Cargos, Grupos, Categorias};
use Illuminate\Support\Facades\Route;


Route::get('cargos', Cargos::class)->middleware('auth');
Route::get('grupos', Grupos::class)->middleware('auth');
Route::get('categorias', Categorias::class)->middleware('auth');


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
