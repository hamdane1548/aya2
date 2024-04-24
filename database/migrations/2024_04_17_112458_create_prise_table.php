<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePriseTable extends Migration
{
    public function up()
    {
        Schema::create('prise', function (Blueprint $table) {
            $table->string('ID_PRISE', 100)->primary();
            $table->string('ID_BARQUE', 100);
            $table->string('ID_RAIS', 100);
            $table->string('ID_ESPECE', 100);
            $table->string('ID_PORT', 100);
            $table->date('DATE')->nullable();
            $table->string('POIDS', 100)->nullable();
            $table->string('IMAGE', 100)->nullable();

            $table->foreign('ID_BARQUE')->references('ID_BARQUE')->on('barque');
            $table->foreign('ID_RAIS')->references('ID_RAIS')->on('rais');
            $table->foreign('ID_ESPECE')->references('ID_ESPECE')->on('especes');
            $table->foreign('ID_PORT')->references('ID_PORT')->on('port');
        });
    }

    public function down()
    {
        Schema::dropIfExists('prise');
    }
}
