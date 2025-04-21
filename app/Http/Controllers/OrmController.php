<?php

namespace App\Http\Controllers;

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
