<?php
use App\Http\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::Controller(UserController::class)->group(function () {
    Route::get('usse','enviar');
    Route::post('usse/env','enviarUsuario');

});
