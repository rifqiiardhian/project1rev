<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBacklinkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('backlink', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bahasa',50);
            $table->string('kategori',50);
            $table->string('nama_website',100);
            $table->string('link',100);
            $table->integer('da');
            $table->integer('pa');
            $table->string('jenis',50);
            $table->string('tipe',50);
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
        Schema::dropIfExists('backlink');
    }
}
