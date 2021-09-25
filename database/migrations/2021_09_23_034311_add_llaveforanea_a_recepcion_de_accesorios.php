<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLlaveforaneaARecepcionDeAccesorios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recepcions', function (Blueprint $table)  {
            $table->foreignId('accesorio_id')
            ->nullable()
            ->constrained('accesorios')
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
        Schema::table('recepcions', function (Blueprint $table)  {
            $table->dropColumn('accesorio_id');
        });
    }
}
