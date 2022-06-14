<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAhliSyarikatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ahli_syarikats', function (Blueprint $table) {
            $table->id();
            $table->string('kod_jabatan');
            $table->string('nama');
            $table->string('noAhli');
            $table->string('noKPBaru');
            $table->string('noKPLama');
            $table->string('jawatan');
            $table->string('pangkat');
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
        Schema::dropIfExists('ahli_syarikats');
    }
}
