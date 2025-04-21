<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function show($id)
    {
        // Obtén la publicación por ID
        $publication = Publication::find($id);

        // Si la publicación no existe, puedes redirigir o devolver un error
        if (!$publication) {
            return response()->json(['error' => 'Publicación no encontrada'], 404);
        }

        // Accede al rol relacionado
        $role = $publication->role;

        // Devuelve la publicación y su rol
        return response()->json([
            'publication' => $publication,
            'role' => $role
        ]);
    }
}
