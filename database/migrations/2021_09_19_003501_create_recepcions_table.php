<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecepcionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recepcions', function (Blueprint $table) {
            $table->id();
            $table->string('prioridad',45)->nullable();
            $table->string('area',45);
            $table->string('estado',45);
            $table->string('diagnostico',45)->nullable();
            $table->string('garantia',45)->nullable();
            $table->string('contraseña',45)->nullable();
            $table->date('fechadeingreso');
            $table->date('fechadeentrega');
            $table->float('presupuesto',8,2);
            $table->float('adelanto',8,2)->nullable();
            $table->string('observacion',100)->nullable();
            $table->string('problema',100);
            $table->foreignId('clientes_id')
                  ->nullable()
                  ->constrained('clientes')
                  ->cascadeOnUpdate()
                  ->restrictOnDelete();
            $table->foreignId('equipos_id')
                  ->nullable()
                  ->constrained('equipos')
                  ->cascadeOnUpdate()
                  ->restrictOnDelete();
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
        Schema::dropIfExists('recepcions');
    }
}
