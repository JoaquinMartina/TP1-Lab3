<?php

namespace Application\Services;

class TimeDepositsService
{
    public function calculateFinalDeposit(float $amount, int $days): float
    {
        $percentage = $this->calculatePercentage($days);
        $finalAMount = $amount + ($amount*($days/360)*($percentage/100));

        return round($finalAMount, 2);
    }

    //TODO Refactor
    public function calculatePeriodDeposit(float $amount, int $days): array
    {
       return $period = [
                'period1' => $period1 = $this->calculateFinalDeposit($amount,$days),
                'period2' => $period2 = $this->calculateFinalDeposit($period1,$days),
                'period3' => $period3 = $this->calculateFinalDeposit($period2,$days),
                'period4' => $period4 = $this->calculateFinalDeposit($period3,$days),
                ];
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
