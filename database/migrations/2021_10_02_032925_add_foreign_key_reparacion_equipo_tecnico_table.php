<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyReparacionEquipoTecnicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detalle_reparacions', function (Blueprint $table) {
            $table->foreignId('reparacion_id')
            ->nullable()
            ->constrained('reparacions')
            ->cascadeOnUpdate()
            ->restrictDelete();
            $table->foreignId('equipo_id')
            ->nullable()
            ->constrained('equipos')
            ->cascadeOnUpdate()
            ->restrictDelete();
            $table->foreignId('tecnico_id')
            ->nullable()
            ->constrained('tecnicos')
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
        Schema::table('detalle_reparacions', function (Blueprint $table) {
            Schema::dropIfExists('reparacion_id');
            Schema::dropIfExists('equipo_id');
            Schema::dropIfExists('tecnico_id');

        });
    }
}
