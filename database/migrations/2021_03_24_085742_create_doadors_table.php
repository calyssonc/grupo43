<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        Schema::create('doadors', function (Blueprint $table) {
            $table->id();
            $table->string('nome',200);
            $table->string('email',50);
            $table->string('senha',12);
            $table->string('endereco',100);
            $table->string('uf',3);
            $table->string('cpf',11);
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
        Schema::dropIfExists('doadors');
    }
}
