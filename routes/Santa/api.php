<?php

use App\Layer\Presentation\Controllers\Santa\CreateSantaController;
use App\Layer\Presentation\Controllers\Santa\GetSantaByIdController;
use Illuminate\Support\Facades\Route;



Route::post('create/santa', [CreateSantaController::class, 'create'])->name('create.santa');

Route::get('get/santa/{id}', [GetSantaByIdController::class, 'get'])->name('get.santa');
