<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\app\dashboard\clients\clientController;
use App\Http\Controllers\app\dashboard\agents\agentController;
use App\Http\Controllers\app\dashboard\applicationn\applicationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/




/* A group of API routes that are prefixed with `crm/clients` */
Route::prefix('crm/clients')->group(function ()
{

        Route::controller(clientController::class)->group(function ()
        {
            Route::get('/create', 'createClient');
        });


});


/* A group of API routes that are prefixed with `crm/agents` */
Route::prefix('crm/agents')->group(function ()
{

        Route::controller(agentController::class)->group(function ()
        {
            Route::get('/create', 'createAgent');
        });


});


/* A group of API routes that are prefixed with `crm/applications` */
Route::prefix('crm/applications')->group(function ()
{

        Route::controller(applicationController::class)->group(function ()
        {
            Route::get('/create', 'createApplication');
        });


});
