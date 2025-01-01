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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id('id_transaksi');
            $table->unsignedBigInteger('id_mitra'); // Foreign key to Tabel Mitra
            $table->decimal('jumlah', 15, 2); // Total amount of transaction
            $table->date('tanggal'); // Transaction date
            $table->enum('status', ['pending', 'completed', 'failed'])->default('pending'); // Status of transaction
            $table->text('keterangan')->nullable(); // Additional information
            $table->timestamps();

            // Defining foreign key constraint
            $table->foreign('id_mitra')->references('id')->on('profiles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
