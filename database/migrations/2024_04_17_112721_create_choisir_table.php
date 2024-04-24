<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChoisirTable extends Migration
{
    public function up()
    {
        Schema::create('choisir', function (Blueprint $table) {
            $table->string('ID_BARQUE', 100);
            $table->string('ID_ESPECE', 100);
            
            $table->primary(['ID_BARQUE', 'ID_ESPECE']);
            
            $table->foreign('ID_ESPECE')->references('ID_ESPECE')->on('especes');
            $table->foreign('ID_BARQUE')->references('ID_BARQUE')->on('barque');
        });
    }

    public function down()
    {
        Schema::dropIfExists('choisir');
    }
}
