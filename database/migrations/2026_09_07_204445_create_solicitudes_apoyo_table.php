<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('solicitudes_apoyo', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable(); 
            $table->text('mensaje');
            $table->string('estado')->default('pendiente');
            $table->string('seudonimo')->nullable();
            $table->string('correo');
            $table->enum('nivel_estres', ['bajo', 'medio', 'alto'])->default('medio');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('solicitudes_apoyo');
    }
};