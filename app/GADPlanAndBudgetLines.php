<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BUDGETS;
use App\PerformanceIndicators;
class GADPlanAndBudgetLines extends Model
{
    protected $table='GADPlanAndBudgetLines';

    
 /**
     * Get all of the comments for the GADPlanAndBudgetLines
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function GADBudget()
    {
        return $this->hasMany(BUDGETS::class, 'GADPABLineID', 'GADPABLineID');
    }
    public function PerformanceTarget_Indicatorss()
    {
        return $this->hasMany(PerformanceIndicators::class, 'GADPABLineID', 'GADPABLineID');
    }
}


