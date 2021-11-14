<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    public function index()
    {
        return view('customer.services');
    }
}
