<?php

namespace Presentation\Http\Controllers;

use Presentation\Http\Requests\SendTimeDepositsFormRequest;
use Application\Services\TimeDepositsService;
use Symfony\Component\Console\Input\Input;


class CustomerFormController extends Controller
{
    private TimeDepositsService $timeDepositsService;

    public function __construct(TimeDepositsService $timeDepositsService)
    {
        $this->timeDepositsService = $timeDepositsService;
    }

    public function showForm()
    {
        return view('customerForm');
    }


    public function sendForm(SendTimeDepositsFormRequest $request)
    {
        $name = $request->input('name');
        $surname = $request->input('surname');
        $amount = $request->input('amountDeposited');
        $days = $request->input('days');
        $reinvestment = $request->input('reinvestment');
        $numberPeriods = $request->input('numberPeriods');

        if ($reinvestment == false) {

            $finalAmount = $this->timeDepositsService->calculateFinalDeposit($amount, $days);

            $dataTimeDeposits = [
                'nameSurname' => $name . " " . $surname,
                'amountDeposited' => $amount,
                'days' => $days,
                'finalAmount'=>$finalAmount
            ];

            return view('informationTimeDeposits', compact('dataTimeDeposits'));
        }

        else
        {
            //TODO refactor rules validation
            $request->validate(['numberPeriods'=> 'required|numeric|min:1|max:10']);

            $dataPeriod = $this->timeDepositsService->calculatePeriodDeposit($amount,$days,$numberPeriods);

            $dataTimeDeposits = [
                'nameSurname' => $name . " " . $surname,
            ];

            return view('informationTimeDeposits', compact('dataPeriod','dataTimeDeposits'));
        }

    }
}
