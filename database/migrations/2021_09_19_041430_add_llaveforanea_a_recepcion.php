<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLlaveforaneaARecepcion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recepcions', function (Blueprint $table)  {
            $table->foreignId('tecnico_id')
            ->nullable()
            ->constrained('tecnicos')
            ->cascadeOnUpdate()
            ->nullOnDelete();
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
            $table->dropColumn('tecnico_id');
        });
    }
}
