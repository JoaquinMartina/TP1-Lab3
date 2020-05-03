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


    public function calculatePeriodDeposit(float $amount, int $days): array
    {
        $amountPeriod = [$amount];

        for($i=1; $i<=4; $i++)
        {
            $amountPeriod[$i] = $this->calculateFinalDeposit($amountPeriod[$i-1],$days);

            $dataPeriod[$i] = [
                    'numberPeriod' => $i,
                    'initialAmount'=> $amountPeriod[$i-1],
                    'finalAmount'=> $amountPeriod[$i]
            ];
        }

        return $dataPeriod;

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
