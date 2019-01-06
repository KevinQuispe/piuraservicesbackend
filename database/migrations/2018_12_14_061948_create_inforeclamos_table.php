<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInforeclamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inforeclamos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('entidadempresa_id')->unsigned();
            $table->string('nombre', 255);
            $table->longtext('descripcion');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('entidadempresa_id')->references('id')->on('entidadempresa')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inforeclamos');
    }
}
