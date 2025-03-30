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
        Schema::create('servicios', function (Blueprint $table) {
            $table->bigIncrements('id_servicio'); 
            $table->unsignedBigInteger('id_registro3'); 
            $table->string('direccion', 50);
            $table->text('descripcion', 80); 
            $table->decimal('valor', 10, 3);
            $table->timestamps(); 

            // Definir claves foraneas 
            $table->foreign('id_registro3')->references('id_registro')->on('registros')->onDelete('cascade');
        });
    

    Schema::create('usuarios_servicios', function (Blueprint $table) {
        $table->unsignedBigInteger('id_usuario1');
        $table->unsignedBigInteger('id_servicio1');
        $table->timestamps(); 

        // Definir claves foraneas
        $table->foreign('id_usuario1')->references('id_usuario')->on('usuarios')->onDelete('cascade');
        $table->foreign('id_servicio1')->references('id_servicio')->on('servicios')->onDelete('cascade'); 
    }); 

    Schema::create('pagos', function (Blueprint $table) {
        $table->bigIncrements('id_pago');
        $table->unsignedBigInteger('id_servicio2'); 
        $table->decimal('monto', 10, 3);
        $table->date('fecha');
        $table->time('hora');
        $table->timestamps(); 

        // Definir claves foraneas
        $table->foreign('id_servicio2')->references('id_servicio')->on('servicios')->onDelete('cascade');
    });

    Schema::create('reseñas', function (Blueprint $table) {
        $table->bigIncrements('id_reseñas');
        $table->text('reseña');
        $table->date('fecha');
        $table->time('hora');
        $table->unsignedBigInteger('id_servicio3');
        $table->timestamps(); 

        // Definir claves foraneas 
        $table->foreign('id_servicio3')->references('id_servicio')->on('servicios')->onDelete('cascade'); 
    });
   }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicios');
        Schema::dropIfExists('usuarios_servicios');
        Schema::dropIfExists('pagos');
        Schema::dropIfExists('reseñas');
    }
}; 
 