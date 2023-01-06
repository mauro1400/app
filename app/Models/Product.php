<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    protected $fillable = [
        'COD_P',
        'NOMBRE_PRO',
        'UNDAD_MEDIDA',
        'FECHA_P',
    
    ];
    protected $primaryKey = 'COD_P';
    
    protected $dates = [
        'FECHA_P',
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/products/'.$this->getKey());
    }
}
