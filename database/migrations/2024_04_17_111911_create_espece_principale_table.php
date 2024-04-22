<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEspecePrincipaleTable extends Migration
{
    public function up()
    {
        Schema::create('espece_principale', function (Blueprint $table) {
            $table->string('ID_ESPECE', 100)->primary();
            $table->string('NOM_ESPECE', 100)->nullable();
            $table->string('IMAGE', 100)->nullable();

            $table->foreign('ID_ESPECE')->references('ID_ESPECE')->on('especes');
        });
    }

    public function down()
    {
        Schema::dropIfExists('espece_principale');
    }
}
