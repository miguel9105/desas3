<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;



use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

    use HasFactory;

    protected $fillable = [
        'content', 'is_admin_message', 'is_read', 'role_id'
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}

    public function role()  {
        return $this->belongsToMany('App/Models/Role');
    }
}

