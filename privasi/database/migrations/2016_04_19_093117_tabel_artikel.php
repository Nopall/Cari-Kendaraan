<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelArtikel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('artikel', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tanggal');
            $table->string('judul');
            $table->string('berita');
            $table->string('gambar');
            $table->integer('dibaca');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
