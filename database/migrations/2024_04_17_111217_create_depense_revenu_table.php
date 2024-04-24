<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepenseRevenuTable extends Migration
{
    public function up()
    {
        Schema::create('depense_revenu', function (Blueprint $table) {
            $table->string('ID_DEPENSE_REVENU', 100)->primary();
            $table->string('ID_TYPE', 100);
            $table->string('ID_RAIS', 100);
            $table->string('MONTANT', 100)->nullable();
            $table->date('DATE')->nullable();

            $table->foreign('ID_TYPE')->references('ID_TYPE')->on('type');
            $table->foreign('ID_RAIS')->references('ID_RAIS')->on('rais');
        });
    }

    public function down()
    {
        Schema::dropIfExists('depense_revenu');
    }
}
