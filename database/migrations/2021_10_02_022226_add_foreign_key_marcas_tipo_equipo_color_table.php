<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyMarcasTipoEquipoColorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('equipos', function (Blueprint $table) {
            $table->foreignId('tipoequipo_id')
            ->nullable()
            ->constrained('tipo_equipos')
            ->cascadeOnUpdate()
            ->restrictDelete();
            $table->foreignId('marca_id')
            ->nullable()
            ->constrained('marcas')
            ->cascadeOnUpdate()
            ->restrictDelete();
            $table->foreignId('color_id')
            ->nullable()
            ->constrained('colors')
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
        Schema::table('equipos', function (Blueprint $table) {
            $table->dropColumn('tipoequipo_id','marca_id','color_id');
        });
    }
}
