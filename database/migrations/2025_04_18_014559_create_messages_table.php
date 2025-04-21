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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->text('content'); // Para el contenido del mensaje
            $table->boolean('is_admin_message')->default(false); // Para indicar si es un mensaje de administrador
            $table->boolean('is_read')->default(false); // Para indicar si el mensaje ha sido leído
            $table->foreignId('role_id')->constrained()->onDelete('cascade'); // Relación con la tabla 'roles'
            $table->timestamps(); // Tiempos de creación y actualización
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
