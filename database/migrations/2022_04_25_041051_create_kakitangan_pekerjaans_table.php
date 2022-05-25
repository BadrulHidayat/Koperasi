<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKakitanganPekerjaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kakitangan_pekerjaans', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('noStaff');
            $table->string('bahagian');
            $table->string('jawatan');
            $table->string('statusKerja');
            $table->string('noGaji');
            $table->string('gaji');
            $table->string('potongan');
            $table->string('tarikhMulaKerja');
            $table->string('tarikhAkhirKerja');
            $table->string('statusStaff');
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
        Schema::dropIfExists('kakitangan_pekerjaans');
    }
}
