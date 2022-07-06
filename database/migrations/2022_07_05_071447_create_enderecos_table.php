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
            $table->integer('end_id', true);
            $table->string('end_complemento');
            $table->string('end_numero');
            //$table->unsignedBigInteger('cliente_id');
            // $table->unsignedBigInteger('log_id');

            $table->foreignId('cli_id');
            $table->foreignId('log_id');
        });

        // Schema::table('enderecos', function (Blueprint $table) {
        //     //$table->foreign('cli_id')->references('cli_id')->on('clientes')->onDelete('cascade');
        //     //$table->foreign('log_id')->references('log_id')->on('logradouros')->onDelete('cascade');
        // });
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
