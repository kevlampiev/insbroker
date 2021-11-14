<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        return view('customer.blog');
    }
}
