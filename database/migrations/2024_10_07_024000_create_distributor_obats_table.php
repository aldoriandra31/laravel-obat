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
        Schema::create('distributor_obats', function (Blueprint $table) {
            $table->id();
            $table->string('kode_distributor', 45);
            $table->string('nama_distributor', 255);
            $table->text('alamat_distributor');
            $table->double('latitude', 10, 8);
            $table->double('longitude', 11, 8);
            $table->text('telp_distributor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('distributor_obats');
    }
};
