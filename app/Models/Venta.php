<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Venta extends Eloquent
{
    use HasFactory;
    public function Compra(){
        return $this->hasOne(Compra::class);
    }

    protected $fillable = [
        'codigo_auto',
        'fecha_venta',
        'precio_venta',
        'dni_cliente',
        'tipo_pago',
    ];
}

