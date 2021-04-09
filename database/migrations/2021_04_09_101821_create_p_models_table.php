<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_models', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("Code");
            $table->string("Name");
            $table->string("Description");
            $table->string("Price");
            $table->string("Distributor");
            $table->string("Mfgdate");
            $table->string("Expdate");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('p_models');
    }
}
