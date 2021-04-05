<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoacaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doacao', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_doador')->nullable();
            $table->unsignedBigInteger('id_necessita');
            $table->timestamps();
        });

        Schema::table('doacao', function (Blueprint $table) {
            $table->foreign('id_doador')->references('id')->on("doadors");
            $table->foreign('id_necessita')->references('id')->on("necessita");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doacao');
    }
}
