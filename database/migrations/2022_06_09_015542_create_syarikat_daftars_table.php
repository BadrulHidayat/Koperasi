<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSyarikatDaftarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('syarikat_daftars', function (Blueprint $table) {
            $table->id();
            $table->string('nama_jabatan');
            $table->string('kod_jabatan');
            $table->string('ketua_jabatan');
            $table->string('maklumat_jabatan');
            $table->string('kategori');
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
        Schema::dropIfExists('syarikat_daftars');
    }
}
