<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampeonatoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campeonato', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('logo_url');
            $table->integer('vitorias')->default(0);
            $table->integer('derrotas')->default(0);
            $table->integer('pontos')->default(0);

            $table->integer('serie_id')->unsigned();
            $table->foreign('serie_id')->references('id')->on('serie')->onDelete('cascade');
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
        Schema::dropIfExists('campeonato');
    }
}
