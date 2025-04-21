<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
use App\Models\Publication;

class NotificationController extends Controller
{
    // Muestra todas las notificaciones junto con su publicación relacionada
    public function index()
    {
        $notifications = Notification::with('publication')->get();
        return view('notifications.index', compact('notifications'));
    }

    // Muestra una notificación específica por ID con su publicación incluida
    public function show($id)
    {
        $notification = Notification::with('publication')->find($id);

        // Si no se encuentra la notificación, se devuelve un error 404
        if (!$notification) {
            return response()->json(['mensaje' => 'Notificación no encontrada'], 404);
        }

        // Si existe, se devuelve como JSON con su publicación incluida
        return response()->json($notification);
    }

    // Muestra el formulario para crear una nueva notificación
    public function create()
    {
        // Obtenemos todas las publicaciones para que puedan ser seleccionadas
        $publications = Publication::all();
        return view('frm_notifications', compact('publications'));
    }

    // Guarda la nueva notificación en la base de datos
    public function store(Request $request)
    {
        // Validación de los datos recibidos
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string|in:terremoto,inundacion,incendio,tormenta,otro',
            'description' => 'required|string',
            'event_notification' => 'nullable|string',
            'publication_id' => 'nullable|exists:publications,id',
        ]);

        // Crear una nueva notificación y guardarla
        Notification::create([
            'title' => $request->input('title'),
            'type' => $request->input('type'),
            'description' => $request->input('description'),
            'event_notification' => $request->input('event_notification'),
            'publication_id' => $request->input('publication_id') ?? null,
        ]);

        // Redirigir al usuario con un mensaje de éxito
        return redirect()->route('notifications.create')->with('success', 'Notificación creada exitosamente.');
    }
}
