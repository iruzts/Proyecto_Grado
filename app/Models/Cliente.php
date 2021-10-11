<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    
    public function Reparacions(){
        return $this->hasMany(Reparacion::class,'id');
    }
    public function Equipos(){
        return $this->hasMany(Equipo::class,'id');
    }
}
