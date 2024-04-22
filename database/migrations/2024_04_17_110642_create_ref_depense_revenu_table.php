<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefDepenseRevenuTable extends Migration
{
    public function up()
    {
        Schema::create('ref_depense_revenu', function (Blueprint $table) {
            $table->string('ID_DPR', 100)->primary();
            $table->string('ID_TYPE', 100);
            $table->string('TITRE', 100)->nullable();
            $table->string('UNITE', 100)->nullable();

            $table->foreign('ID_TYPE')->references('ID_TYPE')->on('type');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ref_depense_revenu');
    }
}
