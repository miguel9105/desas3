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

//Kevin
Route::controller(NotificationController::class)->group(function () {
    Route::get('/notificacion', 'vista_notificacion')->name('notificacion.formulario');
    Route::post('/notificacion', 'respuesta_notificacion')->name('notificacion.respuesta_notificacion');
});

Route::get('/vite', function () {
    return view('index');
});




Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
