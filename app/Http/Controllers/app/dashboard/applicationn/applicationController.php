<?php

namespace App\Http\Controllers\app\dashboard\applicationn;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class applicationController extends Controller
{
    public function index($userid)
    {
        if(!Session::get('userid'))
        {
            return redirect('/auth/login');
        }
        return view('app.dashboard.application.applicationPage');
    }



    public function createApplication(Request $request)
    {
        return 'API TESTING FROM APPLICATION API ENDPOINT';
    }
}
