<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEspecesTable extends Migration
{
    public function up()
    {
        Schema::create('especes', function (Blueprint $table) {
            $table->string('ID_ESPECE', 100)->primary();
            $table->string('NOM_ESPECE', 100)->nullable();
            $table->string('IMAGE', 100)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('especes');
    }
}
