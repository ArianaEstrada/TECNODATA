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
        Schema::create('soporte_tecnicos', function (Blueprint $table) {
            $table->id('id_soporte');
             $table->unsignedBigInteger('id_empleado')->nullable(); // La columna puede ser nullable
            $table->foreign('id_empleado')->references('id_empleado')->on('empleados')->onDelete('cascade');
             $table->unsignedBigInteger('id_estado')->nullable(); // La columna puede ser nullable
            $table->foreign('id_estado')->references('id_estado')->on('estados')->onDelete('cascade');
             $table->unsignedBigInteger('id_solicitud')->nullable(); // La columna puede ser nullable
            $table->foreign('id_solicitud')->references('id_solicitud')->on('solicitudes')->onDelete('cascade');
             $table->unsignedBigInteger('id_producto')->nullable(); // La columna puede ser nullable
            $table->foreign('id_producto')->references('id_producto')->on('productos')->onDelete('cascade');
            $table->date('fecha_resolucion');
            $table->string('desc_problematica');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soporte_tecnicos');
    }
};
