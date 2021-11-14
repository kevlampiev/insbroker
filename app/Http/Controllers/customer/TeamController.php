<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    public function index()
    {
        return view('customer.team');
    }
}
