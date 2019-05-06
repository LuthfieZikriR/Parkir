<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParkirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parkirs', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('jenis',['mobil','motor']);
            $table->string("nama_kendaraan");
            $table->string("plat_nomor");
            $table->datetime('jam_keluar')->nullable();
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
        Schema::dropIfExists('parkirs');
    }
}
