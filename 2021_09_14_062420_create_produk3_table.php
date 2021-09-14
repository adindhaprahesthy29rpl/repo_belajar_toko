<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduk3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk3', function (Blueprint $table) {
            $table->bigIncrements('id_produk3');
            $table->string('nama_produk');
            $table->text('deskripsi');
            $table->integer('harga');
            $table->string('foto_product');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk3');
    }
}
