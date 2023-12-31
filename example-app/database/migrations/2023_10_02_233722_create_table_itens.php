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
        Schema::create('table_itens', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome', 100);
            $table->foreignId('categoria_id')->constrained('table_categorias');
            $table->string('descricao', 255);
            $table->string('imagem')->nullable();
            $table->decimal('valor');
            $table->string('quantidade');
            $table->enum('status', ['ativo', 'inativo'])->default('ativo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_itens');
    }
};
