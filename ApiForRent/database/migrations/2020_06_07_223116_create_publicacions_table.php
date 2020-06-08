<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicacions', function (Blueprint $table) {
            $table->bigIncrements('id_publicacion');
            $table->string('imagen')->nullable();
            $table->string('oferta');
            $table->string('dimensiones');
            $table->string('descripcion');
            $table->char('estado',1)->nullable(false);
            $table->double('precio', 10, 2);
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_alojamiento');
            $table->unsignedBigInteger('id_localizacion');
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_alojamiento')->references('id_alojamiento')->on('alojamientos');
            $table->foreign('id_localizacion')->references('id_localizacion')->on('localizacions');




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
        Schema::dropIfExists('publicacions');
    }
}
