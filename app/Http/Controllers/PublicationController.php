<?php

namespace App\Http\Controllers;

use App\Models\Publication;
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

    //

    public function vista_publi(){
        return view('frm_pulication');
    }

    public function respuesta_publi(Request $request)  {
        $res = new Publication();
        $res->title=$request->title;
        $res->description=$request->description;
        $res->url_img=$request->url_img;
        $res->date_publication=$request->date_publication;
        $res->ubication=$request->ubication;
        $res->save();
        return $res;
    }


}
