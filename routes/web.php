<?php

use App\Http\Controllers\OrmController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/insertar-datos', [OrmController::class, 'insertData']);

