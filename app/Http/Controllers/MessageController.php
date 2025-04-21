<?php

namespace App\Http\Controllers;

use App\Models\Message;
//use Illuminate\Http\Request;

class MessageController extends Controller
{
    // la funcion index devuelve todos los mensajes con su respectivo rol
    public function index()
    {
        // trae todos los mensajes junto con su relacion role
        //on with se puede traer todo en unsa solaconsulta sin este se utilizaria lazy loaiding el cual es mas largo y cargaria mas el sistema 
        $mensajes = Message::with('role')->get();

        // devuelve los datos en formato JSON
        return response()->json($mensajes);
    }

    //la funcion show muestra un mensaje especifico por su id
    public function show($id)
    {
        // busca el mensaje por id, y tambien trae su rol relacionado esto es posible ya q utilizamos findOrFail si no existe el id lanza un error404
        $mensaje = Message::with('role')->findOrFail($id);

        
        return response()->json($mensaje);
    }
}
