<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Auto extends Eloquent
{
    use HasFactory;
    public function Compra(){
        return $this->hasOne(Compra::class);
    }

    protected $fillable = [
        'marca',
        'modelo',
        'precio',
        'color',
        'kilometraje',
        'stock',
        'categoria',
        'rutaAuto',
    ];
}
