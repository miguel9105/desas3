<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'role_id');
    }
}
