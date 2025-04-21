<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use App\Models\Message;
use Illuminate\Http\Request;

class OrmController extends Controller
{
    public function insertData()
    {// Insertar datos de prueba
        $publication = Publication::create([
            'description_publication' => 'Descripción de prueba',
            'url_imagen' => 'http://ejemplo.com/imagen.jpg',
            'title_publication' => 'Título de prueba',
            'date_publication' => now(),
            'type_publication' => 'Informativa',
            'zone_publication' => 'Zona 1',
            'role_id' => 1, // Asume que el rol con ID 1 existe
        ]);

        $message = Message::create([
            'content' => 'Mensaje de prueba',
            'is_admin_message' => true,
            'is_read' => false,
            'role_id' => 1, // Asume que el rol con ID 1 existe
        ]);

        // Retornar los datos en formato JSON
        return response()->json([
            'publication' => $publication,
            'message' => $message
        ]);
    
    }
}