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

        if ($reinvestment == true) {

            return view('informationTimeDeposits', [
                'nameSurname' => $name . " " . $surname,
                'amountDeposited' => $amount,
                'days' => $days,
                'finalAmount' => $finalAmount,
            ]);

        }

        else {

            return view('informationTimeDeposits', [
                'nameSurname' => $name . " " . $surname,
                'amountDeposited' => $amount,
                'days' => $days,
                'finalAmount'=> $finalAmount,
                'reinvestment' => $reinvestment,
            ]);

        }
    }
}
