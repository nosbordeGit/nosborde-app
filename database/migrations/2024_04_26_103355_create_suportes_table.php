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
        Schema::create('suportes', function (Blueprint $table) {
            $table->charset('utf8mb4');
            $table->collation('utf8mb4_unicode_ci');
            $table->id();
            $table->string('nome');
            $table->string('email')->unique();
            $table->string('msg');
            $table->enum('atendimento',['Em atendimento','Aguardando','Resolvido'])->default('Aguardando');
            $table->string('solucao')->default('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suportes');
    }
};
