<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Alquiler extends Eloquent
{
    
    use HasFactory;
    public function Compra(){
        return $this->hasOne(Compra::class);
    }

    protected $fillable = [
        'fecha_inicio',
        'fecha_fin',
        'precio',
        'pago',
        'dni_cliente',
        'Fecha_mantenimiento',
    ];
    
}
