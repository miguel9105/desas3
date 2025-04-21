<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function role()  {
        return $this->belongsToMany('App/Models/Role');
    }
}