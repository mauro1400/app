<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleado';

    protected $fillable = [
        'CI_EMPLEADO',
        'NOMBRE_EMPLEADO',
        'APELLIDO_P',
        'APELLIDO_M',
        'FECHA_NAC',
        'FECHA_INICIO',
        'TELEFONO',
        'DIRECCION',
        'SALARIO',
        'SEXO',
        'ID_PLANTA',
    
    ];

    protected $primaryKey = 'CI_EMPLEADO';
    
    protected $dates = [
        'FECHA_NAC',
        'FECHA_INICIO',
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/empleados/'.$this->getKey());
    }
}
