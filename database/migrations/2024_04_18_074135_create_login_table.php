<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoginTable extends Migration
{
    public function up()
    {
        Schema::create('login', function (Blueprint $table) {
            $table->string('email', 100)->primary();
            $table->string('password', 100)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('login');
    }
}
