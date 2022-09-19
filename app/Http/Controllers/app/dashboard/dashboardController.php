<?php

namespace App\Http\Controllers\app\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class dashboardController extends Controller
{
    public function index($userid)
    {
        if(!Session::get('userid'))
        {
            return redirect('/auth/login');
        }
        return view('app.dashboard.dashboard');
    }
}
