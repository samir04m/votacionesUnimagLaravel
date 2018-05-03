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
            $table->increments('id');
            $table->string('codigo', 12)->unique();
            $table->string('nombre1', 30);
            $table->string('nombre2', 30);
            $table->string('apellido1', 30);
            $table->string('apellido2', 30);
            $table->string('email',50)->unique();
            $table->string('password');
            $table->integer('rol_id')->unsigned();
            $table->integer('programa_id')->unsigned();
            $table->integer('mesa_id')->unsigned()->nullable();
            $table->integer('estado')->default(0);
            $table->rememberToken();
            $table->timestamps();

            // $table->primary('codigo');
            $table->foreign('rol_id')->references('id')->on('rol')->onDelete('cascade');
            $table->foreign('programa_id')->references('id')->on('programa')->onDelete('cascade');
            $table->foreign('mesa_id')->references('id')->on('mesa');
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
