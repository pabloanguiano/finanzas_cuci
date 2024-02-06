<?php

use App\Http\Controllers\CapturaController;
use Illuminate\Support\Facades\Route;


Route::get('/',[CapturaController::class, 'index'])->name('captura.index');