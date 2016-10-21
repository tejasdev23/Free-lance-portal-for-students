<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsergivenprobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usergivenprobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Company');
            $table->string('Email');
            $table->string('Abstract');
            $table->string('Type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usergivenprobs');
    }
}
