<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('pengunjung_id')->unsigned();
            $table->foreign('pengunjung_id')->references('id')->on('pengunjung'); 

            $table->bigInteger('binaan_id')->unsigned();
            $table->foreign('binaan_id')->references('id')->on('wargabinaan'); 

            $table->string('berkas');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengajuan');
    }
}
