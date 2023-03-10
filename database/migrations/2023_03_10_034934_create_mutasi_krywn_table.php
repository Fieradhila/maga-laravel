<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMutasiKrywnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mutasi_krywn', function (Blueprint $table) {
            $table->increments('kode_mutasi', 20);
            $table->date('tgl_mutasi');
            $table->integer('NIK')->unique();
            $table->enum('cabang_lama', ['MAGA 1', 'MAGA 2', 'MAGA 3', 'MAGA 4', 'MAGA 5', 'MAGA 6', 'MAGA 7']);
            $table->enum('cabang_baru', ['MAGA 1', 'MAGA 2', 'MAGA 3', 'MAGA 4', 'MAGA 5', 'MAGA 6', 'MAGA 7']);
            $table->enum('departement_lama', ['IT', 'Security', 'Pramuniaga', 'Kasir', 'Gudang', 'MD', 'Keuangan', 'Pemasaran', 'SDM', 'KRT', 'Data Entry']);
            $table->enum('departement_baru', ['IT', 'Security', 'Pramuniaga', 'Kasir', 'Gudang', 'MD', 'Keuangan', 'Pemasaran', 'SDM', 'KRT', 'Data Entry']);
            $table->enum('jabatan_lama', ['Manager', 'Assistant Manager', 'Supervisor', 'Staf Pusat', 'Koordinator', 'HRD', 'Karyawan']);
            $table->enum('jabatan_baru', ['Manager', 'Assistant Manager', 'Supervisor', 'Staf Pusat', 'Koordinator', 'HRD', 'Karyawan']);
            $table->string('alasan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mutasi_krywn');
    }
}
