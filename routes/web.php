<?php

use App\Http\Controllers\MateriaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('materia.index');
});

Route::resource('materia', MateriaController::class);