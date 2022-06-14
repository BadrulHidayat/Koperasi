<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndividuDaftarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individu_daftars', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('noKP');
            $table->string('noKPlama');
            $table->string('jantina');
            $table->date('tarikh_lahir');
            $table->string('tempat_lahir');
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
        Schema::dropIfExists('individu_daftars');
    }
}
