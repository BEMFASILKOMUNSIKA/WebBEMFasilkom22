<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertaPubgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peserta_pubg', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_tim');
            $table->string('nama_peserta');
            $table->string('nickname');
            $table->string('id_game');
            $table->string('no_hp_peserta');
            $table->text('path_foto');
            $table->timestamps();

            $table->foreign('id_tim')->references('id')->on('tim_pubg')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peserta_pubg');
    }
}