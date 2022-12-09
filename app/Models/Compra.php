<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Compra extends Eloquent
{
    use HasFactory;
    public function Auto(){
        return $this->embedsMany(Auto::class);
    }
    public function user(){
        return $this->embedsMany(user::class);
    }
}
