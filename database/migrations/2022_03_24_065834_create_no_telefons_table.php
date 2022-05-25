<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoTelefonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('no_telefons', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('noAhli');
            $table->string('telRumah');
            $table->string('telPejabat');
            $table->string('telHP');
            $table->string('faks');
            $table->string('email');
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
        Schema::dropIfExists('no_telefons');
    }
}
