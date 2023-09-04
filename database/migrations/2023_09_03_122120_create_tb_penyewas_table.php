<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPenyewasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_penyewas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user')->unsigned();
            $table->bigInteger('id_mobil')->unsigned();
            $table->integer('lama_sewa');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->string('status_pengembalian')->nullable();
            $table->string('total_harga');
            $table->timestamps();

            $table->foreign('id_user')->references('id')
            ->on('users');
            $table->foreign('id_mobil')->references('id')
            ->on('tb_mobils');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_penyewas');
    }
}
