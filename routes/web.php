<?php

use App\Http\Controllers\CargadoDeDocumentoController;
use App\Http\Controllers\MetricasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\tiposDeDocumentosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', [MetricasController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Route::get('/metricas', [MetricasController::class, 'index'])->name('metricas.index');
    // Route::get('/prueba', [MetricasController::class, 'prueba'])->name('prueba');
    Route::get('/tipos-documento', [tiposDeDocumentosController::class, 'index'])->name('tipos.index');
    Route::get('/cargado-documento', [CargadoDeDocumentoController::class, 'index'])->name('cargado.index');
});


require __DIR__ . '/auth.php';
