<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirmantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firmantes', function (Blueprint $table) {
            $table->id();
            $table->integer('tipo_firma');
            $table->unsignedBigInteger('id_empleado_cargo');
            $table->foreign('id_empleado_cargo')->references('id')->on('empleado_cargos');
            $table->string('id_contrato');
            $table->foreign('id_contrato')->references('contrato')->on('contratos');
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
        Schema::dropIfExists('firmantes');
    }
}
