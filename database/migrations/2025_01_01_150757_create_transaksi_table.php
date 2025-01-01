<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_mitra');
            $table->decimal('jumlah', 20, 2);
            $table->date('tanggal');
            $table->enum('status', ['pending', 'completed', 'failed']);
            $table->text('keterangan');
            $table->timestamps();

            $table->foreign('id_mitra')->references('id')->on('profiles')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
};
