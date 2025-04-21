<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Notification;
use App\Models\Publication;
use App\Http\Controllers\NotificationController;


// Ruta para mostrar el formulario de creaciOn de notificaciOn
Route::get('/notifications/create', [NotificationController::class, 'create'])->name('notifications.create');

// Ruta para almacenar la nueva notificaciOn
Route::post('/notifications/store', [NotificationController::class, 'store'])->name('notifications.store');

// Ruta para ver consultas Eloquent y los datos
Route::get('/queries/notifications', function () {
    DB::enableQueryLog();

    $notifications = Notification::with('publication')->get();

    $queries = DB::getQueryLog();

    return response()->json([
        'data' => $notifications,
        'queries' => $queries,
    ]);
});

