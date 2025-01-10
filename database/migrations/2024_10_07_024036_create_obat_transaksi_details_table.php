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
        Schema::create('obat_transaksi_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('obat_transaksi_id');
            $table->unsignedBigInteger('obat_id');
            $table->integer('jumlah');
            $table->double('harga', 15, 2);
            $table->double('subtotal', 15, 2);

            $table->foreign('obat_transaksi_id')->references('id')->on('obat_transaksis')->onDelete('cascade');
            $table->foreign('obat_id')->references('id')->on('obats')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obat_transaksi_details');
    }
};
