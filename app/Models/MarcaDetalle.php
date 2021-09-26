<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarcaDetalle extends Model
{
    use HasFactory;
    public function Marca(){
        return $this->belongsTo(Cliente::class,'marca_id');
    }
    public function Equipo(){
        return $this->belongsTo(Cliente::class,'equipo_id');
    }
}
