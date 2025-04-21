<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['administrators', 'community', 'zona_community', 'mail_administrator'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'role_user');
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function publications()
    {
        return $this->hasMany(Publication::class);
    }
}
