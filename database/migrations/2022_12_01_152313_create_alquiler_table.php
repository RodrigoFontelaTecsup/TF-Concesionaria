<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alquiler', function (Blueprint $table) {
            $table->id();
            $table->string('fecha_inicio');
            $table->string('fecha_fin');
            $table->integer('precio');
            $table->string('pago');
            $table->unsignedBigInteger('cliente');
            $table->foreign('id_cliente')->references('id')->on('cliente');
            $table->unsignedBigInteger('id_mantenimiento');
            $table->foreign('id_mantenimiento')->references('id')->on('Mantenimiento');
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
        Schema::dropIfExists('alquiler');
    }
};
