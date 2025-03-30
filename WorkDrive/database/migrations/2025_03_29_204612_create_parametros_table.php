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
        Schema::create('parametros', function (Blueprint $table) {
            $table->bigIncrements('id_parametro');
            $table->string('nombre');
            $table->string('estado', 2)->default('A');
            $table->timestamps();
        });
    
        Schema::create('detalle_parametros', function (Blueprint $table) {
            $table->bigIncrements('id_detalle_parametro');
            $table->string('nombre');
            $table->unsignedBigInteger('id_p2');
            $table->foreign('id_p2')->references('id_parametro')->on('parametros')->onDelete('cascade');
            $table->string('estado', 2)->default('A');
            $table->timestamps();
    });
    } 
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parametros');
        Schema::dropIfExists('detalle_parametros');
    }
};
