<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDftrKrywnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dftr_krywn', function (Blueprint $table){
            $table->increments('NIK');
            $table->string('ID', 20);
            $table->string('nama_krywn');
            $table->date('tgl_lahir');
            $table->enum('status_nikah', ['Menikah', 'Belum Menikah', 'Duda', 'Janda']);
            $table->string('alamat');
            $table->enum('gender', ['P', 'L']);
            $table->enum('pendidikan', ['TK', 'SD', 'SMP', 'SMA/SMK', 'D2', 'D3', 'D4', 'S1', 'S2', 'S3']);
            $table->enum('agama', ['Islam', 'Konghuchu', 'Kristen', 'Katolik', 'Budha', 'Hindu']);
            $table->string('no_hp');
            $table->date('tgl_masuk');
            $table->enum('jabatan', ['Manager', 'Assistant Manager', 'Supervisor', 'Staf Pusat', 'Koordinator', 'HRD', 'Karyawan']);
            $table->enum('cabang', ['MAGA 1', 'MAGA 2', 'MAGA 3', 'MAGA 4', 'MAGA 5', 'MAGA 6', 'MAGA 7']);
            $table->enum('departement', ['IT', 'Security', 'Pramuniaga', 'Kasir', 'Gudang', 'MD', 'Keuangan', 'Pemasaran', 'SDM', 'KRT', 'Data Entry']);
            $table->string('email');
            $table->enum('status_kerja', ['Training', 'Kontrak', 'Tetap', 'PKL']);
            $table->enum('status_aktif', ['Aktif', 'Tidak Aktif']);
            $table->string('file_foto')->nullable();
            $table->string('file_ktp')->nullable();
            $table->string('file_kk')->nullable();
            $table->string('file_nikah')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dftr_krywn');
    }
}
