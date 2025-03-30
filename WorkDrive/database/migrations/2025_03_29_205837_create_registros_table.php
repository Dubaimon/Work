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
        Schema::create('registros', function (Blueprint $table) {
            $table->bigIncrements('id_registro');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email');
            $table->string('Password'); 
            $table->unsignedBigInteger('id_detalle_parametro'); 
            $table->string('estado', 2)->default('A');
            $table->timestamps(); 

            // Definir claves foraneas
            $table->foreign('id_detalle_parametro')->references('id_detalle_parametro')->on('detalle_parametros')->onDelete('cascade');
        }); 

        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id_usuario');
            $table->unsignedBigInteger('id_registro1'); 
            $table->string('usuario', 45);
            $table->string('password');
            $table->timestamps(); 

            // Definir claves foraneas
            $table->foreign('id_registro1')->references('Id_registro')->on('registros')->onDelete('cascade'); 
        }); 

        Schema::create('empleados', function (Blueprint $table) {
            $table->bigIncrements('id_Empleado');
            $table->unsignedBigInteger('id_r');
            $table->unsignedBigInteger('id_Labor');
            $table->unsignedBigInteger('id_Sexo');
            $table->unsignedBigInteger('id_salario');
            $table->string('certificado');
            $table->string('curriculum');
            $table->unsignedBigInteger('id_dp1');
            $table->timestamps(); 

            // Definir claves foraneas 
            $table->foreign('id_r')->references('id_registro')->on('registros')->onDelete('cascade'); 
            $table->foreign('id_dp1')->references('id_detalle_parametro')->on('detalle_parametros')->onDelete('cascade');
        }); 

        Schema::create('disponibilidad', function (Blueprint $table) {
            $table->bigIncrements('id_disponibilidad');
            $table->unsignedBigInteger('id_e1'); 
            $table->date('fecha');
            $table->time('hora');
            $table->timestamps(); 

            // Definir claves foraneas 
            $table->foreign('id_e1')->references('id_empleado')->on('empleados')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registros');
        Schema::dropIfExists('usuarios');
        Schema::dropIfExists('empleados');
    }
};
