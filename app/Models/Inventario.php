<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    protected $table = 'inventario';

    protected $fillable = [
        'ID_INVENTARIO',
        'FECHA',
        'COD_P',
        'ID_PLANTA',
        'CI_EMPLEADO',
    
    ];
    protected $primaryKey = 'ID_INVENTARIO';
    
    protected $dates = [
        'FECHA',
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/inventarios/'.$this->getKey());
    }
}
