<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGADProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GADProfiles', function (Blueprint $table) {
            $table->id('GADProfID');
            $table->string('NameOfOrg')->nullable();
            $table->string('OfficeAddress')->nullable();
            $table->string('fax')->nullable();
            $table->string('telephone')->nullable();
            $table->string('mobile')->nullable();
            $table->string('website')->nullable();
            $table->string('headOfOrg')->nullable();
            $table->string('chairperson')->nullable();
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
        Schema::dropIfExists('GADProfiles');
    }
}
