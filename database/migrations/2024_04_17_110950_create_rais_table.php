<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRaisTable extends Migration
{
    public function up()
    {
        Schema::create('rais', function (Blueprint $table) {
            $table->string('ID_RAIS', 100)->primary();
            $table->string('NOM_RAIS', 100)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rais');
    }
}
