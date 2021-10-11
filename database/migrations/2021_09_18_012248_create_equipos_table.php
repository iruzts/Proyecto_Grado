<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->string('modelo',50)->default('Sin Modelo');
            $table->string('serie',50)->default('Sin Serie');
            $table->string('claveequipo',50)->default('Sin Contraseña');
            $table->string('problema',50);
            $table->string('accesorios',50)->default('Sin Accesorios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipos');
    }
}
