<?php

use App\Http\Controllers\CapturaController;
use Illuminate\Support\Facades\Route;


Route::get('/Captura',[CapturaController::class, 'index'])->name('captura.index');
Route::post('/Captura/store',[CapturaController::class,'store'])->name('captura.store');
Route::post('/Captura/edit',[CapturaController::class, 'edit'])->name('captura.name');
Route::post('/Captura/update',[CapturaController::class, 'update'])->name('captura.update');
Route::post('/Captura/delete',[CapturaController::class, 'destroy'])->name('captura.destroy');