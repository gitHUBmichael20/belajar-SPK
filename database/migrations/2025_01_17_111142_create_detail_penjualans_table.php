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
        Schema::create('detail_penjualans', function (Blueprint $table) {
            $table->id('DetailID', 11);
            $table->foreignId('PejualanID')->constrained('penjualans', 'PenjualanID')->onDelete('cascade');
            $table->foreignId('ProdukID')->constrained('produks', 'ProdukID')->onDelete('cascade');
            $table->integer('JumlahProduk');
            $table->decimal('SubTotal', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_penjualans');
    }
};
