<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            // $table->increments('id');
            $table->string('codigo', 12)->unique();
            $table->string('nombre1', 30);
            $table->string('nombre2', 30)->nullable();
            $table->string('apellido1', 30);
            $table->string('apellido2', 30);
            $table->string('email',50)->unique();
            $table->string('password');
            $table->string('rol_id',1)->nullable();
            $table->string('tipo_id',3)->nullable();
            $table->integer('programa_id')->unsigned()->nullable();
            $table->integer('mesa_id')->unsigned()->nullable();
            $table->integer('estado_id')->unsigned()->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->primary('codigo');
            $table->foreign('rol_id')->references('id')->on('rol')->onDelete('cascade');
            $table->foreign('tipo_id')->references('id')->on('tipo')->onDelete('cascade');
            $table->foreign('programa_id')->references('id')->on('programa')->onDelete('cascade');
            $table->foreign('mesa_id')->references('id')->on('mesa')->onDelete('cascade');
            $table->foreign('estado_id')->references('id')->on('estado')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
