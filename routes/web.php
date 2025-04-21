<?php
namespace App\Http\Controllers;

use App\Models\Publication;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('ormconsultas', [OrmController::class,'consultas']);

Route::controller(UserController::class)->group(function(){
    Route::get('usse','enviar');
    Route::post('Userr','enviarUsuario')->name('User.enviarUsuario');
});

Route::controller(PublicationController::class)->group(function ()  {
    Route::get('/publicacion','vista_publi');
    Route::post('/publicacion/respuesta','respuesta_publi')->name('Publication.respuesta_publi');
 
  
 
use App\Models\Message;
Route::controller(MessageController::class)->group(function ()  {
    Route::get('vistamensaje','enviar');
    Route::post('vistamensaje','store')->name('Message.store');

});