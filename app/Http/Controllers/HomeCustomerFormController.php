<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeCustomerFormController extends Controller
{
    public function index()
    {
        return view('customerForm');
    }
}
