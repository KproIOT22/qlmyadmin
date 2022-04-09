<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function account()
    {
        return view('account_settings.settings-account');
    }
    public function connections()
    {
        return view('account_settings.settings-connections');
    }
    public function notifications()
    {
        return view('account_settings.settings-notifications');
    }
}
