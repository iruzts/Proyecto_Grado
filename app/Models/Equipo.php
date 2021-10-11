<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
    public function TipoEquipos(){
        return $this->belongsTo(TipoEquipo::class,'tipoequipo_id');
    }
    public function Marcas(){
        return $this->belongsTo(Marca::class,'marca_id');
    }
    public function Colors(){
        return $this->belongsTo(Color::class,'color_id');
    }
    public function DetalleReparacions(){
        return $this->hasMany(DetalleReparacion::class,'id');
    }
    public function Clientes(){
        return $this->belongsTo(Cliente::class,'cliente_id');
    }
}
