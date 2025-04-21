<?php
namespace App\Http\Controllers;
use App\Models\Message;
use Illuminate\Support\Facades\Route;

Route::controller(MessageController::class)->group(function ()  {
    Route::get('vistamensaje','enviar');
    Route::post('vistamensaje','store')->name('Message.store');
});