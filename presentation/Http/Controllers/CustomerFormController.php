<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerFormController extends Controller
{
    public function showForm()
    {
        return view('customerForm');
    }

    public function sendForm(Request $request)
    {
        //TODO
    }
}
