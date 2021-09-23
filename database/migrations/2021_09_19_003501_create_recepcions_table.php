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
            $table->string('marca',45);
            $table->string('modelo',45);
            $table->string('serie',45);
            $table->date('fechadeingreso');
            $table->date('fechadeentrega');
            $table->string('observacion',100);
            $table->string('problema',100);
            $table->foreignId('clientes_id')
                  ->nullable()
                  ->constrained('clientes')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->foreignId('equipos_id')
                  ->nullable()
                  ->constrained('equipos')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
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
