<?php

use App\Livewire\{Cargos, Grupos, Categorias, Igrejas, Regioes, Blocos, Pessoas, Tipos, Trabalhos};
use Illuminate\Support\Facades\Route;


Route::get('cargos', Cargos::class)->middleware('auth');
Route::get('grupos', Grupos::class)->middleware('auth');
Route::get('categorias', Categorias::class)->middleware('auth');
Route::get('igrejas', Igrejas::class)->middleware('auth');
Route::get('regioes', Regioes::class)->middleware('auth');
Route::get('blocos', Blocos::class)->middleware('auth');
Route::get('tipos', Tipos::class)->middleware('auth');
Route::get('pessoas', Pessoas::class)->name('pessoas')->middleware('auth');


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
