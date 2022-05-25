<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKakitanganDaftarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kakitangan_daftars', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('nama');
            $table->string('noStaff');
            $table->string('noKPBaru');
            $table->string('noKPLama');
            $table->string('jantina');
            $table->string('bangsa');
            $table->string('agama');
            $table->date('tarikhLahir');
            $table->string('tempatLahir');
            $table->string('carianPejabat');
            $table->string('jenisCarianPejabat');
            $table->string('carianPembayarGaji');
            $table->string('jenisCarianPembayarGaji');
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
        Schema::dropIfExists('kakitangan_daftars');
    }
}
