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
        Schema::create('nota_barangs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nota_id')->references('id')->on('notas');
            $table->foreignId('barang_id')->references('id')->on('barangs');
            $table->integer('jumlah');
            $table->decimal('harga', 9, 0);
            $table->decimal('subtotal', 9, 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nota_barangs');
    }
};
