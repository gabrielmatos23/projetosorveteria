<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id('id_pedidos');
            $table->timestamp('data_compra')->useCurrent();
            $table->decimal('preco_compra', 8, 2);

            $table->foreignId('id_produto')
                  ->constrained('produtos')
                  ->onDelete('cascade');

            $table->foreignId('id_cliente')
                  ->constrained('clientes')
                  ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
