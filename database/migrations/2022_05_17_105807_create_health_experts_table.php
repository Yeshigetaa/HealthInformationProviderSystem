<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHealthExpertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health_experts', function (Blueprint $table) {
            $table->id();
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->string('sex')->nullable();
            $table->string('email')->nullable();
            $table->string('profession')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('health_experts');
    }
}
