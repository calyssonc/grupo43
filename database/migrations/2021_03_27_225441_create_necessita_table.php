<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNecessitaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('necessita', function (Blueprint $table) {
            $table->id();
            $table->integer('material_qty');
            $table->bigInteger('status');
            $table->unsignedBigInteger('material_id');
            $table->unsignedBigInteger('filho_id');
            $table->timestamps();
        });
        Schema::table('necessita', function (Blueprint $table) {
            $table->foreign('material_id')->references('id')->on("material");
            $table->foreign('filho_id')->references('id')->on("filho");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('necessita');
    }
}
