<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnersTable extends Migration
{
    /**
     * Menjalankan migrasi untuk membuat tabel partners.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('name'); 
            $table->string('email')->unique(); 
            $table->string('phone'); 
            $table->timestamps(); 
        });
    }

    /**
     * Membatalkan migrasi untuk menghapus tabel partners.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partners');
    }
}
