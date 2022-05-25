<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKakitanganPerhubungansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kakitangan_perhubungans', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('noStaff');
            $table->string('telRumah');
            $table->string('telPejabat');
            $table->string('telHP');
            $table->string('faks');
            $table->string('email');
            $table->string('telco');
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
        Schema::dropIfExists('kakitangan_perhubungans');
    }
}
