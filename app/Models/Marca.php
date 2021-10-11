<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
    public function MarcaDetalle(){
        return $this->hasMany(Recepcion::class,'id');
    }
    public function Equipos(){
        return $this->hasMany(Equipo::class,'id');
    }
}
