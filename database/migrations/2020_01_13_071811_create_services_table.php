<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id_jasa');
            $table->varchar('nama_jasa');
            $table->int('biaya_jasa');
            $table->int('jumlah_item');
            $table->int('biaya_barang');
            $table->int('jumlah_total');
            $table->int('dibayar');
            $table->int('kembali');
            $table->int('id_kasir');
            $table->int('id_mekanik');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
