<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
       
            $table->string('contrato');
            $table->primary('contrato');
            $table->string('nom_obra');
            $table->text('descripcion');
            $table->date('fecha_alta');
            $table->string('ubicacion');
            $table->date('fecha_inicio');
            $table->date('fecha_termino');
            $table->integer('plazo_dias');
            $table->double('importe',20,2);
            $table->double('amortizacion',20,2);
            $table->unsignedBigInteger('id_empresa');
            $table->foreign('id_empresa')->references('id')->on('empresas');
            $table->unsignedBigInteger('id_afianzadora');
            $table->foreign('id_afianzadora')->references('id')->on('afianzadoras');

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
        Schema::dropIfExists('contratos');
    }
}
