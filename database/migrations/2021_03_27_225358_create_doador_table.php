<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doador', function (Blueprint $table) {
            $table->id();
            $table->string('nome',200);
            $table->string('cpf',11);
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        });
        Schema::table('doador', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on("users");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doador');
    }
}
