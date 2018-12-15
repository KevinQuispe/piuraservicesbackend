<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('entidadempresa_id')->unsigned();
            $table->string('nombreempresa', 100);
            $table->string('direccion', 100);
            $table->string('horario',100);
            $table->string('telefono',100);
            $table->string('tipoatencion',100);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('entidadempresa_id')->references('id')->on('entidadempresa')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contactos');
    }
}
