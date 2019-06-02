<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $data = [];
    }

    /*
     * Get Dashboard
     *
    */
    public function getDashboard()
    {
        return view('dashboard.dashboard');
    }


}
