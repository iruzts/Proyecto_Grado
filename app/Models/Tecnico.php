<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tecnico extends Model
{
    use HasFactory;
    
    public function DetalleReparacions(){
        return $this->hasMany(DetalleReparacion::class,'id');
    }
}
