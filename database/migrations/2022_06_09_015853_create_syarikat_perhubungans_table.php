<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSyarikatPerhubungansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('syarikat_perhubungans', function (Blueprint $table) {
            $table->id();
            $table->string('tel_R');
            $table->string('tel_P');
            $table->string('tel_HP');
            $table->string('tel_HP_type');
            $table->string('faks');
            $table->string('email');
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
        Schema::dropIfExists('syarikat_perhubungans');
    }
}
