<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksi3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi3', function (Blueprint $table) {
            $table->bigIncrements('id_transaksi3');
            $table->unsignedBigInteger('id_pelanggan3');
            $table->foreign('id_pelanggan3')->references('id_pelanggan3')->on('pelanggan3');
            $table->unsignedBigInteger('id_petugas3');
            $table->foreign('id_petugas3')->references('id_petugas3')->on('petugas3');
            $table->date('tgl_transaksi');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi3');
    }
}
