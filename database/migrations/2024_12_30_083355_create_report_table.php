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
        Schema::create('report', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_mitra');
            $table->foreign('id_mitra')->references('id')->on('profiles')->onDelete('cascade');
            $table->string('periode');
            $table->integer('total_transaksi');
            $table->decimal('total_pendapatan', 15, 2); // Menyimpan angka desimal
            $table->string('status_kinerja');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('report');
    }
};