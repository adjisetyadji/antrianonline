<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengunjungsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengunjungs', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('nama');
            $table->string('status');
            $table->string('email');
            $table->string('notelp');
            $table->foreignId('jenisId')->constrained('jenispajaks')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('layananId')->constrained('jenislayanans')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nop');
            $table->string('kec');
            $table->string('alamatobjek');
            $table->date('tanggal');
            $table->foreignId('jamId')->constrained('jams')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('pengunjungs');
    }
}
