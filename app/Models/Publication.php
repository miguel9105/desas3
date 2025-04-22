<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{

    protected $fillable = [
        'description_publication', 'url_imagen', 'title_publication', 
        'date_publication', 'type_publication', 'zone_publication', 'role_id'
    ];
    public function role()
{
    return $this->belongsTo(Role::class);
}

    
    //
    public function role() {
        return $this->belongsTo('App\Models\role');
    }

    public function category() {
        return $this->belongsToMany('App\Models\Category');
    }

}
