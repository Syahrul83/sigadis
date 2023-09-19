<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masters', function (Blueprint $table) {
            $table->id();
            $table->string('id_ap2t')->nullable();
            $table->string('id_nama')->nullable();
            $table->string('kepanjangan')->nullable();
            $table->string('lintang')->nullable();
            $table->string('bujur')->nullable();
            $table->string('konstruksi')->nullable();
            $table->string('trafo')->nullable();
            $table->string('penyulang')->nullable();
            $table->string('rayon')->nullable();
            $table->string('merek')->nullable();
            $table->string('ns_trafo')->nullable();
            $table->string('tahun')->nullable();
            $table->string('tipe')->nullable();
            $table->string('kapasitas')->nullable();
            $table->string('nama_bengkel')->nullable();
            $table->date('tgl_revisi')->nullable();
            $table->string('jumlah')->nullable();
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
        Schema::dropIfExists('masters');
    }
}
