<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('ormconsultas', [OrmController::class,'consultas']);

Route::controller(UserController::class)->group(function(){
    Route::get('usse','enviar');
    Route::post('Userr','enviarUsuario')->name('User.enviarUsuario');
});
