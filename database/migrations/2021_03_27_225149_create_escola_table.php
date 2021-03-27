<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEscolaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escola', function (Blueprint $table) {
            $table->id();
            $table->string('nome',220);
            $table->string('tipo',20);
            $table->string('localizacao');
            $table->string('cnpj')->unique();
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        });
        Schema::table('escola', function (Blueprint $table) {
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
        Schema::dropIfExists('escola');
    }
}
