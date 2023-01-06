<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    protected $table = 'ubicacion';

    protected $fillable = [
        'ID_UBICACION',
        'DESIGNACION',
        'TIPO',
        'CAPACIDAD',
        'ID_PLANTA',
    
    ];
    protected $primaryKey = 'ID_UBICACION';
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/ubicacions/'.$this->getKey());
    }
}
