<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKakitanganAlamatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kakitangan_alamats', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('noStaff');
            $table->string('alamat');
            $table->string('poskod');
            $table->string('daerah');
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
        Schema::dropIfExists('kakitangan_alamats');
    }
}
