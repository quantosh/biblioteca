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
        Schema::create('alquileres', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('codLibro');
            $table->unsignedBigInteger('codUsuario');
            $table->date('fechaPrestamo');
            $table->date('fechaDevolucion');
            $table->timestamps();

             $table->foreign('codLibro')->references('id')->on('libros')->onDelete('cascade');

              $table->foreign('codUsuario')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alquileres');
    }
};
