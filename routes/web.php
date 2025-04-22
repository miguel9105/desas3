<?php
namespace App\Http\Controllers;


use App\Http\Controllers\RoleController;
use App\Http\Controllers\OrmController;

use App\Models\Publication;
use App\Models\User;

use Illuminate\Support\Facades\Route;

Route::get('ormconsultas', [OrmController::class,'consultas']);

Route::controller(UserController::class)->group(function(){
    Route::get('usse','enviar');
    Route::post('Userr','enviarUsuario')->name('User.enviarUsuario');
});




Route::get('/consultas', [OrmController::class, 'consultas'])->name('roles.consultas');
Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create');
Route::post('/roles', [RoleController::class, 'store'])->name('roles.store');


Route::controller(PublicationController::class)->group(function ()  {
    Route::get('/publicacion','vista_publi');
    Route::post('/publicacion/respuesta','respuesta_publi')->name('Publication.respuesta_publi');
 
  
 
use App\Models\Message;
Route::controller(MessageController::class)->group(function ()  {
    Route::get('vistamensaje','enviar');
    Route::post('vistamensaje','store')->name('Message.store');

});

