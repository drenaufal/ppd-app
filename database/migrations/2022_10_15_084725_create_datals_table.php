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
        Schema::create('datals', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            // $table->string('slug')->uniqid;
            $table->integer('jumlah_barang');
            $table->string('status_pembayaran');
            $table->date('tgl_pembelian');
            $table->string('file');
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
        Schema::dropIfExists('datals');
    }
};
