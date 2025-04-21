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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();  // Genera un ID automáticamente como clave primaria
            $table->string('role_name'); // Nombre del rol
            $table->boolean('administrators')->default(false); // Administradores
            $table->boolean('community')->default(false); // Comunidad
            $table->boolean('zone_community')->default(false); // Zona de comunidad
            $table->boolean('mail_administrator')->default(false); // Administrador de correo
            $table->timestamps(); // Campos created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
