<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarkerTable extends Migration
{
    public function up()
    {
        Schema::create('marker', function (Blueprint $table) {
            $table->string('ID_MARKERS', 100)->primary();
            $table->string('ID_RAIS', 100);
            $table->string('LATITUDE', 100)->nullable();
            $table->string('LONGITUDE', 100)->nullable();
            $table->string('NOM_LIEU', 100)->nullable();

            $table->foreign('ID_RAIS')->references('ID_RAIS')->on('rais');
        });
    }

    public function down()
    {
        Schema::dropIfExists('marker');
    }
}
