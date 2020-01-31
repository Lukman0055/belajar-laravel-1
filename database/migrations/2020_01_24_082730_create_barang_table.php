<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nama_brg');
            $table->string('Nomor_brg')->unique();
            $table->string('Berat_brg');
            $table->text('Deskripsi');
            $table->string('Jenis_brg');
            $table->integer('Harga_brg');
            $table->integer('Stok');
            $table->string('Penerima');
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
        Schema::dropIfExists('barang');
    }
}
