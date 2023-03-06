<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGADPlanAndBudgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GADPlanAndBudgetHeader', function (Blueprint $table) {
            $table->id('GADPABID');
            $table->string('DocumentType')->nullable();
            $table->string('DocumentNumber')->nullable();
            $table->string('Reference')->nullable();
            $table->string('DateEndorsed')->nullable();
            $table->string('FiscalYear')->nullable();
            $table->string('Organization')->nullable();
            $table->string('OrganizationCategory')->nullable();
            $table->string('Category')->nullable();
            $table->string('Heirarchy')->nullable();
            $table->string('TotalBudget_GAA')->nullable();
            $table->string('ActualGADExpenditure')->nullable();
            $table->string('OriginalBudget')->nullable();
            $table->string('UtilizationofBudget')->nullable();
            $table->string('PercentofGADExpenditure')->nullable();
            $table->string('TotalGADBudget')->nullable();
            $table->string('PrimarySources')->nullable();
            $table->string('Othersources')->nullable();
            $table->string('PercentGADAllocation')->nullable();
            $table->boolean('draft')->default(1);
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
        Schema::dropIfExists('GADPlanAndBudgetHeader');
    }
}
