<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index()
    {
        return view('customer.about');
    }

}
