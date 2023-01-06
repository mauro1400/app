<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    protected $table = 'detalle';

    protected $fillable = [
        'ID_DETALLE',
        'PRECIO_ALMACEN',
        'PRECIO_VENTA',
        'COD_P',
        'ID_PLANTA',
        'CI_EMPLEADO',
    
    ];
    protected $primaryKey = 'ID_DETALLE';
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/detalles/'.$this->getKey());
    }
}
