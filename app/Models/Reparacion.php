<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reparacion extends Model
{
    use HasFactory;
    public function Clientes(){
        return $this->belongsTo(Cliente::class,'Cliente_id');
    }
    public function DetalleReparacions(){
        return $this->hasMany(DetalleReparacion::class,'id');
    }
}
