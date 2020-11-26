<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->id();
            $table->string('FechaT');
            $table->string('FechaE');
            $table->string('Escuela')->nullable();
            $table->string('Nombre');
            $table->string('DiasA')->nullable();
            $table->string('Grupo')->nullable();
            $table->string('Tel');
            $table->string('Paquete');
            $table->string('Nota')->nullable();
            $table->string('Estatus')->nullable();
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
        Schema::dropIfExists('todos');
    }
}