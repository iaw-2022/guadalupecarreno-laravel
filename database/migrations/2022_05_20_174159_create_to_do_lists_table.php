<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('to_do_lists', function (Blueprint $table) {
            
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('id_auto');//llave foranea
            $table->unsignedBigInteger('id_tarea');//llave foranea
            $table->foreign('id_auto')->references('id')->on('autos')->onUpdate('cascade')->onDelete('cascade');            
            $table->foreign('id_tarea')->references('id')->on('tareas')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('to_do_lists');
    }
};
