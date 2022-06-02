<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAhlisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ahli_daftars', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('statusAhli');
            $table->string('noAhliTerkini');
            $table->string('noAhli');
            $table->date('tarikhDaftar');
            $table->string('nama');
            $table->string('noKPBaru');
            $table->string('noKPLama');
            $table->string('jantina');
            $table->string('bangsa');
            $table->string('agama');
            $table->date('tarikhLahir');
            $table->string('tempatLahir');
            $table->string('caraPembayaran');
            $table->string('carianPejabat');
            $table->string('jenisCarianPejabat');
            $table->string('carianPembayarGaji');
            $table->string('jenisCarianPembayarGaji');
            $table->string('jawatan');
            $table->string('tarikhMulaKerja');
            $table->string('noGaji');
            $table->string('Gaji');
            $table->string('potongan');
            $table->string('perakuan');
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
        Schema::dropIfExists('ahli_daftars');
    }
}
