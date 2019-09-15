<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('npp');
            $table->string('nama');
            $table->date('tanggal_awal');
            $table->string('skala');
            $table->string('program');
            $table->integer('jumlah_tk');
            $table->date('tanggal_tengah');
            $table->date('tanggal_akhir');
            $table->integer('jumlah_iuran');
            $table->string('pelaporan');
            $table->string('iuran');
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
        Schema::dropIfExists('companies');
    }
}
