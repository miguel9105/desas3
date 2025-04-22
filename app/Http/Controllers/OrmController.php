<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use App\Models\Message;
use Illuminate\Http\Request;

use App\Models\Role;

class OrmController extends Controller
{
    public function consultas()
    {
        $roles = Role::all(); // Esto trae todos los registros de la tabla roles
        return $roles;
    }
}