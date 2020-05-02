<?php

namespace Presentation\Http\Controllers;

use Presentation\Http\Requests\SendTimeDepositsFormRequest;
use Application\Services\TimeDepositsService;


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

        $finalAmount = $this->timeDepositsService->calculateFinalDeposit($amount, $days);

        //TODO Refactor

        if ($reinvestment == false) {

            return view('informationTimeDeposits', [
                'nameSurname' => $name . " " . $surname,
                'amountDeposited' => $amount,
                'days' => $days,
                'finalAmount' => $finalAmount,
            ]);

        }

        else {

            $period = $this->timeDepositsService->calculatePeriodDeposit($amount,$days);

            return view('informationPeriodTimeDeposits',[
                'nameSurname' => $name . " " . $surname,
                'amountDeposited' => $amount,
                'days' => $days,
                'period' => $period
            ]);

        }
    }
}
