<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IptuController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        return view('iptu', ['page' => 'iptu']);
    }
}
