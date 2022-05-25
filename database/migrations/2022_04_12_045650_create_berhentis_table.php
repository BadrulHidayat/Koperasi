<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBerhentisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berhentis', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('noKPBaru');
            $table->string('noAhli');
            $table->date('tarikhMohon');
            $table->date('tarikhLulus');
            $table->date('tarikhBerhenti');
            $table->string('statusBerhenti');
            $table->string('sebabBerhenti');
            $table->date('akhirPotongan');
            $table->date('tarikhPemgembalian');
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
        Schema::dropIfExists('berhentis');
    }
}
