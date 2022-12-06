<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Alquiler extends Eloquent
{
    use HasFactory;

    protected $fillable = [
        'fecha_inicio',
        'fecha_fin',
        'precio',
        'pago',
        'dni_cliente',
        'stock',
        'categoria',
        'Fecha_mantenimiento',
    ];
    
}
