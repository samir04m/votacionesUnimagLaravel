<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voto', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mesa_id')->unsigned();
            $table->string('candidato_id',12);
            $table->integer('cantidad')->nullable();
            $table->timestamps();

            $table->foreign('mesa_id')->references('id')->on('mesa')->onDelete('cascade');
            $table->foreign('candidato_id')->references('id')->on('candidato')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voto');
    }
}
