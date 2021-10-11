<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleReparacion extends Model
{
    use HasFactory;
    public function Reparacions(){
        return $this->belongsTo(Reparacion::class,'reparacion_id');
    }
    public function Equipos(){
        return $this->belongsTo(Equipo::class,'equipo_id');
    }
    public function Tecnicos(){
        return $this->belongsTo(Tecnico::class,'tecnico_id');
    }
}
