<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('doacaos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_doador');
            $table->unsignedBigInteger('id_necessita');
            $table->timestamps();
        });

        Schema::table('doacaos', function (Blueprint $table) {
            $table->foreign('id_doador')->references('id')->on("doadors");
            $table->foreign('id_necessita')->references('id')->on("necessitas");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doacaos');
    }
}
