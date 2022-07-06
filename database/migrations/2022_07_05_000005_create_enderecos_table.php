<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id('end_id');
            $table->string('end_complemento', 255);
            $table->string('end_numero', 255);
            $table->unsignedBigInteger('cli_id');
            $table->unsignedBigInteger('log_id');

            $table->foreign('cli_id')->references('cli_id')->on('clientes')->onDelete('cascade');
            $table->foreign('log_id')->references('log_id')->on('logradouros')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enderecos');
    }
}
