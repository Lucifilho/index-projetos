<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ManipulationController;


Route::get('/', [EventController::class,'home']);

Route::get('/projetos', [EventController::class,'projetos']);

Route::get('/lista-projetos', [EventController::class,'listaProjetos']);

Route::get('/novo-projeto', [EventController::class,'novoProjeto']);

Route::post('/cadastrar-projeto', [ManipulationController::class,'novoProjeto']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
