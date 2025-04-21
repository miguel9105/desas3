<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    // campos que se pueden llenar de forma masiva con create o fill
    protected $fillable = [
        'title',
        'type',
        'description',
        'event_notification',
        'publication_id',
        'file_path'
    ];

    // una notificacion pertenece a una publicacion
    public function publication()
    {
        return $this->belongsTo(Publication::class);
    }
}
