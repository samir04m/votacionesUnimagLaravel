<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidato', function (Blueprint $table) {
            // $table->increments('id');
            $table->string('id',12);
            $table->string('numero',10)->nullable();
            $table->string('foto');
            $table->integer('organo_id')->unsigned();
            $table->timestamps();

            $table->primary('id');
            $table->foreign('id')->references('codigo')->on('users')->onDelete('cascade');
            $table->foreign('organo_id')->references('id')->on('organo')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidato');
    }
}
