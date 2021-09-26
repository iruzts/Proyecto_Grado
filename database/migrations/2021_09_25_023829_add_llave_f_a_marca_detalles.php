<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLlaveFAMarcaDetalles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('marca_detalles', function (Blueprint $table)  {
            $table->foreignId('marca_id')
            ->nullable()
            ->constrained('marcas')
            ->cascadeOnUpdate()
            ->restrictDelete();
            $table->foreignId('equipo_id')
            ->nullable()
            ->constrained('equipos')
            ->cascadeOnUpdate()
            ->restrictDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('marca_detalles', function (Blueprint $table)  {
            $table->dropColumn('marca_id','equipo_id');
        });
    }
}
