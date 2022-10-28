<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_barang', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->string('id_kategori');
            $table->string('id_lokasi');
            $table->string('qty');
            $table->string('id_satuan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daftar_barang');
    }
};
