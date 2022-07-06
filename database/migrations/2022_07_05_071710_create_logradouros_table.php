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
            $table->BigInteger('log_id', true);
            $table->string('log_cep');
            $table->string('log_nome');
            $table->string('log_tipo');
            $table->string('log_bairro');
            $table->timestamps();
            $table->unsignedBigInteger('cid_id');
        });

        // Schema::table('logradouros', function (Blueprint $table) {
        //     $table->foreign('cid_id')->references('cid_id')->on('cidades');
        // });
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
