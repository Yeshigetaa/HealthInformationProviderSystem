<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiseasesTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Diseases', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('description',100)->nullable();
            $table->string('cause',8)->nullable();
            $table->string('symptom')->nullable();
            $table->string('treatment',82)->nullable();
            $table->string('transmition')->nullable();
            $table->unsignedBigInteger('expert_id')->foriegn('expert_id')
            ->references('id')
            ->on('Diseases')
            ->onDelete('cascade');
        });
    }

    /*
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Diseases');
    }
}