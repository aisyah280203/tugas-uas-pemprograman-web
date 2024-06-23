<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KotaController;

Route::get('/', [KotaController::class, 'index'])->name('kota.index');
Route::get('/kota/create', [KotaController::class, 'create'])->name('kota.create');
Route::post('/kota', [KotaController::class, 'store'])->name('kota.store');
Route::get('/kota/{id}/edit', [KotaController::class, 'edit'])->name('kota.edit');
Route::put('/kota/{id}', [KotaController::class, 'update'])->name('kota.update');
Route::delete('/kota/{id}', [KotaController::class, 'destroy'])->name('kota.destroy');
Route::get('/kota/print', [KotaController::class, 'print'])->name('kota.print');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

