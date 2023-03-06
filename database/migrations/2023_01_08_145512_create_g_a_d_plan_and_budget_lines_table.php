<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGADPlanAndBudgetLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GADPlanAndBudgetLines', function (Blueprint $table) {
            $table->id('GADPABLineID');
            $table->integer('GADPABID');
            $table->string('GenderIssue')->nullable();
            $table->string('GenderMandate')->nullable();
            $table->string('CauseOfGenderIssue')->nullable();
            $table->string('GADResultStatement_Objective')->nullable();
            $table->string('RelevantOrg_MFO_PAP_PPA')->nullable();
            $table->string('MFO_PAP_STATEMENT')->nullable();
            $table->string('GADActivity')->nullable();
            $table->string('Focused')->nullable();    
            $table->string('PerformanceTarget_Indicators')->nullable();
            $table->string('ActualResult')->nullable();
            $table->string('TotalAgencyApprovedBudget')->nullable();
            $table->string('ActualCost_Expenditure')->nullable();
            $table->string('GADBudget')->nullable();
            $table->string('GADBudgetItem')->nullable();
            $table->string('SourceOfBudget')->nullable();
            $table->string('ResponsibleUnit_Office')->nullable();
            $table->string('VarianceRemarks')->nullable();
            $table->string('attachment')->nullable();
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
        Schema::dropIfExists('GADPlanAndBudgetLines');
    }
}
