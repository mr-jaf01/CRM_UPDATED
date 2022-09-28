<?php

namespace App\Http\Controllers\app\dashboard\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\app\dashboard\client\clientModel;

class clientController extends Controller
{
    public function index($userid)
    {
        if(!Session::get('userid'))
        {
            return redirect('/auth/login');
        }
        return view('app.dashboard.client.clientPage');
    }




    public function createClient(Request $request)
    {
        return 'API TESTING FROM CLIENT API ENDPOINT';
    }
}
