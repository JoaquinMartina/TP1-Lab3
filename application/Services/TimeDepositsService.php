<?php

namespace Application\Services;

class TimeDepositsService
{
    public function calculateFinalDeposit(float $amount, int $days): float
    {
        $percentage = $this->calculatePercentage($days);
        return $amount + ($amount*($days/360)*($percentage/100));
    }

    public function calculatePeriodDeposit(float $amount, int $days)
    {
        //TODO
    }

    private function calculatePercentage(int $days): float
    {
        if($days >=30 && $days<=60)
        {
            $percentage = 40;
        }
        elseif ($days>=61 && $days <=120)
        {
            $percentage = 45;
        }
        elseif ($days>=121 && $days <=360)
        {
            $percentage = 50;
        }
        else
        {
            $percentage = 65;
        }

        return $percentage;
    }
}
