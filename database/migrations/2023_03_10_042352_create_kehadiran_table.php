<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKehadiranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kehadiran', function (Blueprint $table) {
            $table->increments('id_nilai');
            $table->integer('NIK')->unique();
            $table->integer('jumlah_sakit');
            $table->date('tgl_sakit');
            $table->string('ket_sakit');
            $table->string('file_sakit');
            $table->integer('jumlah_izin');
            $table->datetime('izin_dari', $precision = 0);
            $table->datetime('izin_sampai', $precision = 0);
            $table->string('ket_izin');
            $table->integer('jumlah_libur');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kehadiran');
    }
}
