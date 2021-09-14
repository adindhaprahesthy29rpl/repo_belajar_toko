<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelanggan3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelanggan3', function (Blueprint $table) {
            $table->bigIncrements('id_pelanggan3');          
            $table->string('nama');
            $table->text('alamat'); 
            $table->string('telp');
            $table->string('username'); 
            $table->string('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelanggan3');
    }
}
