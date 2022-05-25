<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlamatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alamats', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('noAhli');
            $table->string('alamat');
            $table->string('poskod');
            $table->string('bandar');
            $table->string('negeri');
            $table->string('jenisAlamat');
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
        Schema::dropIfExists('alamats');
    }
}
