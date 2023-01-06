<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plantum extends Model
{
    protected $fillable = [
        'ID_PLANTA',
        'NOMBRE_PL',
        'DESCIPCION',
        'ENCARGADO',
        'APELLIDO_ENC',
    
    ];
    protected $primaryKey = 'ID_PLANTA';
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/planta/'.$this->getKey());
    }
}
