<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\CitaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rutas para Pacientes
    Route::resource('pacientes', PacienteController::class);
    
    // Rutas para Médicos
    Route::resource('medicos', MedicoController::class);

    // Rutas para Citas
    Route::resource('citas', CitaController::class);
});

require __DIR__.'/auth.php';

