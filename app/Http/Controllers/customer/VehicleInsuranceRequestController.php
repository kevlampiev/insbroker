<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;

class VehicleInsuranceRequestController extends Controller
{
    public static function index()
    {
        return view('customer.VehicleInsuranceRequest');
    }
}
