<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    public function maintenance()
    {
        return view('misc.under-maintenance');
    }
}
