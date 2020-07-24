<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_golongan');
            $table->string('id_kelompok');
            $table->string('id_kodeperkiraan');
            $table->string('id_subperkiraan');
            $table->string('nama');
            $table->string('id_satuan');
            $table->string('volume');
            $table->double('harga_perolehan');
            $table->date('tahun_perolehan');
            $table->string('id_sumberdana');
            $table->integer('tarif');
            $table->string('id_kondisi');
            $table->string('id_lokasi');
            $table->string('keterangan');
            $table->string('foto');
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
        Schema::dropIfExists('asets');
    }
}
