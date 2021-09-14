<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailTransaksi3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_transaksi3', function (Blueprint $table) {
            $table->bigIncrements('id_detail_transaksi3');
            $table->unsignedBigInteger('id_transaksi3');
            $table->foreign('id_transaksi3')->references('id_transaksi3')->on('transaksi3');
            $table->unsignedBigInteger('id_produk3');
            $table->foreign('id_produk3')->references('id_produk3')->on('produk3');
            $table->integer('qty');
            $table->integer('subtotal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_transaksi3');
    }
}
