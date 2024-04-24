<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarqueTable extends Migration
{
    public function up()
    {
        Schema::create('barque', function (Blueprint $table) {
            $table->string('ID_BARQUE', 100)->primary();
            $table->string('ID_PORT', 100);
            $table->string('ID_RAIS', 100);
            $table->string('MARTICULE', 100)->nullable();
            $table->string('EQUIPE_NOMBRE', 100)->nullable();
            $table->string('CODEBARRQUE', 100)->nullable();
            $table->string('MESURE', 100)->nullable();

            $table->foreign('ID_PORT')->references('ID_PORT')->on('port');
            $table->foreign('ID_RAIS')->references('ID_RAIS')->on('rais');
        });
    }

    public function down()
    {
        Schema::dropIfExists('barque');
    }
}
