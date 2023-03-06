<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBUDGETSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budgets', function (Blueprint $table) {
            $table->id('BudgetID');
            $table->integer('GADPABLineID');
            $table->string('SourceOfBudget')->nullable();
            $table->string('BudgetItem')->nullable();
            $table->string('budget')->nullable();
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
        Schema::dropIfExists('budgets');
    }
}
