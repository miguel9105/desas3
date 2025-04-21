<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id(); // id autoincremental
            $table->string('title'); // Corregimos el nombre de la columna a 'title' en lugar de 'título'
            $table->string('type', 100); // tipo de desastre o notificación
            $table->text('description'); // descripción del evento
            $table->string('event_notification')->nullable(); // resumen o mensaje relacionado al evento

            // Relación con la tabla publications que puede ser null
            $table->unsignedBigInteger('publication_id')->nullable();
            $table->foreign('publication_id')->references('id')->on('publications')->onDelete('set null');

            $table->timestamps(); // created_at y updated_at
        });
    }

    // Este método revierte los cambios si hacemos rollback
    public function down(): void
    {
        Schema::dropIfExists('notifications'); // Elimina la tabla si existe
    }
};
