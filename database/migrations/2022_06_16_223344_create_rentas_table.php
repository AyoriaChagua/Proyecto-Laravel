<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rentas', function (Blueprint $table) {
            $table->id('renta_id');
            $table->unsignedBigInteger('pelicula_id')->unsigned();
            $table->foreign('pelicula_id')
                  ->references('pelicula_id')
                  ->on('peliculas')
                  ->onDelete('cascade');
            $table->unsignedBigInteger('cliente_id')->unsigned();
            $table->foreign('cliente_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
            $table->date('fecha_registro')->default(now());
            $table->date('fecha_devolucion');
            $table->date('fecha_entrega');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rentas');
    }
};
