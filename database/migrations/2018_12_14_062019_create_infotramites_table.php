<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfotramitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infotramites', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('entidadempresa_id')->unsigned();
            $table->string('nombre', 100);
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
        //
        Schema::dropIfExists('infotramites');
    }
}
