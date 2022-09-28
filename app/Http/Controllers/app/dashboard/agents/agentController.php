<?php

namespace App\Http\Controllers\app\dashboard\agents;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class agentController extends Controller
{
    public function index($userid)
    {
        if(!Session::get('userid'))
        {
            return redirect('/auth/login');
        }
        return view('app.dashboard.agent.agentPage');
    }





    public function createAgent(Request $request)
    {
        return 'API TESTING FROM AGENT API ENDPOINT';
    }
}
