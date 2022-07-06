<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogradourosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logradouros', function (Blueprint $table) {
            $table->id('log_id');
            $table->unsignedBigInteger('cid_id');
            $table->string('log_cep', 9);
            $table->string('log_nome', 100);
            $table->string('log_tipo', 50);
            $table->string('log_bairro', 100);
            $table->timestamps();

            $table->foreign('cid_id')->references('cid_id')->on('cidades')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logradouros');
    }
}
