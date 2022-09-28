<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\app\auth\authController;
use App\Http\Controllers\app\dashboard\dashboardController;
use App\Http\Controllers\app\dashboard\clients\clientController;
use App\Http\Controllers\app\dashboard\agents\agentController;
use App\Http\Controllers\app\dashboard\applicationn\applicationController;


/*
|--------------------------------------------------------------------------
| App Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    return redirect('/auth/login');
});

Route::get('/error', function(){
    return view('app.error.error');
});

//Authentication and Sign Up Routes group
/* A group of routes that are prefixed with `auth` */
Route::prefix('auth')->group(function ()
{

   Route::controller(authController::class)->group(function () {

        Route::get('/login', 'loginPage')->name('login.page');
        Route::post('/login', 'authFunction')->name('auth.function');

        Route::get('/signup', 'signupPage')->name('signup.page');
        Route::post('/signup', 'signupFunction')->name('signup.function');

        Route::get('setpassword', 'setpasswordPage')->name('password.page');
        Route::post('activateAccount', 'activateAccount')->name('activate.account');

        Route::get('/verification', 'emailVerifyPage')->name('emailVerify.page');
        Route::get('/resetpassword','resetPage')->name('reset.page');
        Route::post('/resetpassword', 'SendPassword_resetLink')->name('sendPassword_resetlink.function');
        Route::post('/changepassword', 'changePasswordFunction')->name('changePassword.function');

        Route::get('/onboarding/personalisedSetting', 'OnboardingPersonalisedSettings')->name('onboard.personalised.page');

        Route::get('/logout', 'logoutFunction')->name('auth.logout.function');

   });

});




/* A group of routes that are prefixed with `crm/clients` */
Route::prefix('crm/clients')->group(function ()
{

        Route::controller(clientController::class)->group(function ()
        {
            Route::get('/{userid}/objects/view/all/list', 'index')->name('clients.page');
        });


});


/* A group of routes that are prefixed with `crm/agents` */
Route::prefix('crm/agents')->group(function ()
{

        Route::controller(agentController::class)->group(function ()
        {
            Route::get('/{userid}/objects/view/all/list', 'index')->name('agents.page');
        });


});


/* A group of routes that are prefixed with `crm/applications` */
Route::prefix('crm/applications')->group(function ()
{

        Route::controller(applicationController::class)->group(function ()
        {
            Route::get('/{userid}/objects/view/all/list', 'index')->name('applications.page');
        });


});
