<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;

class CustomersController extends Controller
{
    public static function index()
    {
        return view('customer.customers');
    }
}
