<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PerformanceIndicators extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PerformanceIndicators', function (Blueprint $table) {
            $table->id('PERFID');
            $table->integer('GADPABLineID');
            $table->string('PerformanceIndicator')->nullable();
            $table->string('Target')->nullable();
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
        Schema::dropIfExists('PerformanceIndicators');
    }
}
