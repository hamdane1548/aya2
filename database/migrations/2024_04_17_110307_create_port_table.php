<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortTable extends Migration
{
    public function up()
    {
        Schema::create('port', function (Blueprint $table) {
            $table->string('ID_PORT', 100)->primary();
            $table->string('ID_REGION', 100);
            $table->string('NOM_PORT', 100)->nullable();
            $table->string('LATITUDE', 100)->nullable();
            $table->string('LONGITUDE', 100)->nullable();

            $table->foreign('ID_REGION')->references('ID_REGION')->on('region');
        });
    }

    public function down()
    {
        Schema::dropIfExists('port');
    }
}
