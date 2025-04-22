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

use App\Models\User;
use Illuminate\Http\Request;

class OrmController extends Controller
{
    //consultas usuario
    public function consultas(){
        $user =User::find(1);
        return $user;
    }
}

