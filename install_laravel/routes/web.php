<?php

use App\Http\Controllers\ManagementUserController;

//untuk index menu utama
//Route::get('/', [ManagementUserController::class, 'index']);

//untuk index di sub menu
Route::resource('user', ManagementUserController::class);