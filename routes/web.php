<?php

use App\Http\Controllers\CapturaController;
use Illuminate\Support\Facades\Route;


Route::get('/captura',[CapturaController::class, 'index'])->name('captura.index');
Route::post('/captura/store',[CapturaController::class,'store'])->name('captura.store');