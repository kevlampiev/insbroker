<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;

class ContactsController extends Controller
{
    public static function index()
    {
        return view('customer.contacts');
    }
}
