<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMegustasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('megustas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idUsuario')->unsigned();
            $table->foreign('idUsuario')->references('id')->on('users');
            $table->bigInteger('idUsuarioMeGusta')->nullable();
            $table->bigInteger('idUsuarioNoGusta')->nullable();
            $table->bigInteger ('idUsuarioLeGusto')->nullable();
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
        Schema::dropIfExists('megustas');
    }
}
