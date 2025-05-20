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
        Schema::create('detalle_ventas', function (Blueprint $table) {
            $table->id('id_detalle');
            $table->unsignedBigInteger('id_venta')->nullable(); // La columna puede ser nullable
            $table->foreign('id_venta')->references('id_venta')->on('ventas')->onDelete('cascade');
            $table->unsignedBigInteger('id_producto')->nullable(); // La columna puede ser nullable
            $table->foreign('id_producto')->references('id_producto')->on('productos')->onDelete('cascade');
            $table->double('subtotal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_ventas');
    }
};
