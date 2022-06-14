<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSyarikatAlamatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('syarikat_alamats', function (Blueprint $table) {
            $table->id();
            $table->string('alamat');
            $table->string('poskod');
            $table->string('daerah');
            $table->string('negeri');
            $table->string('jenis_alamat');
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
        Schema::dropIfExists('syarikat_alamats');
    }
}
