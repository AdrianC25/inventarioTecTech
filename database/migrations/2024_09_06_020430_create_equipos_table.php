<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('marca');
            $table->string('modelo');
            $table->string('serie');

            $table->unsignedBigInteger('id_estado');
            $table->foreign('id_estado')->references('id')->on('estados');

            $table->unsignedBigInteger('id_descripcion');
            $table->foreign('id_descripcion')->references('id')->on('descripcions');

            $table->unsignedBigInteger('id_repuestos');
            $table->foreign('id_repuestos')->references('id')->on('repuestos');

            $table->unsignedBigInteger('id_conclusiones');
            $table->foreign('id_conclusiones')->references('id')->on('conclusiones');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipos');
    }
};
