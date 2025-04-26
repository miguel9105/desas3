<?php
namespace App\Http\Controllers;


use App\Http\Controllers\RoleController;
use App\Http\Controllers\OrmController;
use App\Models\Role;
use App\Models\Publication;
use App\Models\Notification;
use App\Models\Message;
use App\Models\User;

use Illuminate\Support\Facades\Route;


//ormCONSULTAS
Route::get('ormconsultas', [OrmController::class,'consultas']);

//adriana
Route::controller(UserController::class)->group(function(){
    Route::get('usse','enviar');
    Route::post('Userr','enviarUsuario')->name('User.enviarUsuario');
});
//miguel
Route::controller(PublicationController::class)->group(function ()  {
    Route::get('/publicacion','vista_publi');
    Route::post('/publicacion/respuesta','respuesta_publi')->name('Publication.respuesta_publi');
});
//michell
Route::controller(MessageController::class)->group(function ()  {
    Route::get('vistamensaje','enviar');
    Route::post('vistamensajes','store')->name('Message.store');
});
//david
Route::controller(RoleController::class)->group(function ()  {
    Route::get('/roles/create','create')->name('roles.create');
    Route::post('/roles','store')->name('roles.store');
});

// Mostrar el formulario de notificacion Kevin
Route::get('/notificacion', [NotificationController::class, 'vista_notificacion'])->name('notificacion.formulario');

// Guardar los datos del formulario Kevin
Route::post('/notificacion', [NotificationController::class, 'respuesta_notificacion'])->name('notificacion.respuesta_notificacion');


Route::get('/vite', function () {
    return view('index');
});







