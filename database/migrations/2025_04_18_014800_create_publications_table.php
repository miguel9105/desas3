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
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
        $table->string('description_publication');
        $table->string('url_imagen');
        $table->string('title_publication');
        $table->date('date_publication');
        $table->string('type_publication');
        $table->string('zone_publication');
        $table->foreignId('role_id')->constrained(); // Esta línea sigue la convención
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};
