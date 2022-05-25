<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKakitanganBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kakitangan_banks', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('noStaff');
            $table->string('noAkaunBank');
            $table->string('jenisBank');
            $table->string('noKPBaru');
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
        Schema::dropIfExists('kakitangan_banks');
    }
}
