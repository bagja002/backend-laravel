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
        Schema::create('permintaan_barang', function (Blueprint $table) {
            $table->id('id_permintaan');
            $table->string('id_user');
            $table->string('nama_user');
            $table->string('departement');
            $table->string('id_barang');
            $table->string('nama_barang');
            $table->string('kuantiti');
            $table->string('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permintaan_barang');
    }
};
