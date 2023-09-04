<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbMobilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_mobils', function (Blueprint $table) {
            $table->id();
            $table->string('merek');
            $table->string('gambar');
            $table->string('status_sewa');
            $table->string('model');
            $table->string('nomor_plat');
            $table->string('harga_sewa_perhari');
            $table->string('deskripsi');
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
        Schema::dropIfExists('tb_mobils');
    }
}
