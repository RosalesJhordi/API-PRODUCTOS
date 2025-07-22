<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $fillable = [
        'nombre',
        'marca',
        'codigo_barras',
        'detalles',
        'imagen'
    ];
}
