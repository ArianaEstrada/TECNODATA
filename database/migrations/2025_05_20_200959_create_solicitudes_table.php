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
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id('id_solicitud');
            $table->unsignedBigInteger('id_producto')->nullable(); // La columna puede ser nullable
            $table->foreign('id_producto')->references('id_producto')->on('productos')->onDelete('cascade');
            $table->unsignedBigInteger('id_cliente')->nullable(); // La columna puede ser nullable
            $table->foreign('id_cliente')->references('id_cliente')->on('clientes')->onDelete('cascade');
            $table->String('desc_problema');
            $table->date('fecha_soli');   
            $table->boolean('atendida')->default(false); // Indica si la solicitud ha sido atendida                                                                                                                            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitudes');
    }
};
