<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recepcion extends Model
{
    use HasFactory;
    public function Clientes(){
        return $this->belongsTo(Cliente::class,'clientes_id');
    }
    public function Equipos(){
        return $this->belongsTo(Equipo::class,'equipos_id');
    }
    public function Tecnicos(){
        return $this->belongsTo(Tecnico::class,'tecnico_id');
    }
    public function Accesorio(){
        return $this->belongsTo(Tecnico::class,'tecnico_id');
    }


}
