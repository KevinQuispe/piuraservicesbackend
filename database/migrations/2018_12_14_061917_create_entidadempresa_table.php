<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntidadempresaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entidadempresa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 100)->unique();;
            $table->string('direccion',100);
            $table->string('telefono',20)->unique();
            $table->string('correo',100);
            $table->string('horario',100);
            $table->string('webentidad',255);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entidadempresa');
    }
}
