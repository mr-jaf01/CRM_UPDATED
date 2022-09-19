<?php

namespace App\Http\Controllers\app\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;


use App\Models\User;
use App\Models\passwordReset;
use App\Models\app\companies\company;




class authController extends Controller
{


   /**
    * It returns the view `app.auth.login`
    *
    * @return A view called login.
    */
    public function loginPage()
    {
        if(Session::get('userid')){
            return redirect('/crm/clients/'.Session::get('userid'));
        }
        return view('app.auth.login');
    }




   /**
    * It checks if the user exists in the database, if it does, it checks if the password is correct,
    * if it is, it creates a session and redirects to the client page
    *
    * @param Request request This is the request object that contains the data from the form.
    */
    public function authFunction(Request $request)
    {
       try {

        $login_user = User::where('email', $request->email)->first();

        if($login_user && Hash::check($request->password, $login_user->password))
        {
            $request->session()->put('userid', $login_user->id);
            return redirect('/crm/clients/'.$login_user->id.'/?token='.$request->_token);
        }
        return back()->with('error', 'Invalid login credentials');


       } catch (\Throwable $th) {
        return redirect('/error/?msg=login');
       }
    }





    /**
     * It returns the view `app.auth.signup`
     *
     * @return A view called signup.
     */
    public function signupPage()
    {
        if(Session::get('userid'))
        {
            return redirect('/crm/clients/'.Session::get('userid'));
        }
        return view('app.auth.signup');
    }




   /**
    * It checks if the email is already registered, if not, it creates a new user, adds a company, and
    * sends an email to the user
    *
    * @param Request request The request object.
    *
    * @return A view
    */
    public function signupFunction(Request $request)
    {
        $hostname = $request->getHttpHost();
        try {


            $check_user = User::where('email',$request->email)->first();
            if($check_user){
                return back()->with('error', 'Account already registered with this email.');
            }
            $new_user = new User();
            $new_user->fname = $request->fname;
            $new_user->lname = $request->lname;
            $new_user->email = $request->email;
            $new_user->role = $request->role;
            $new_user->status = 'pending';
            $new_user->verification_token = $request->_token;
            if($new_user->save()){
                addCompany(
                    $request->company_name,$request->company_industry,
                    $request->company_size,$request->company_domain,$new_user->id
                );
                $verfiy_email_body = '
                    <div style="background-color: rgb(199, 193, 193);  justify-content: center; align-items: center; padding:24px; height:50vh">
                        <div id="main" style="padding: 32px; border-radius:19px; width: 500px;
                            margin: auto;
                            justify-content: center;
                            align-items: center;
                            background-color: white;">
                            <center>
                            <h4 style="color:#00302E; font-size:24px;">Confirm your email, '.$request->fname.'</h4>
                            <p style="text-align: center;  margin-bottom:20px; color: #00302E;">Please take a second to confirm your email address and finish your account setup.</p>
                            <a href="http://'.$hostname.'/auth/setpassword?u='.$request->email.'&token='.$request->_token.'" style="padding:18px; background-color:#FF5C35; color:white; border-radius:19px;">Confirm email address</a>
                            </center>
                        </div>
                        <p style="text-align: center;">Not you? If you didn\'t sign up for CRMTop, you can safely ignore this email. An account was not created</p>
                    </div>
                ';
                sendEmail($request->email, 'CRMTOP ACCOUNT ACTIVATION', $verfiy_email_body);
                return redirect('/auth/verification');
            }


        } catch (\Throwable $th) {
            return redirect('/error/?msg=signup');
        }

    }




   /**
    * It checks if the user is active or not. If the user is active, it redirects to the login page.
    *
    * @param Request request The request object.
    *
    * @return A view
    */
    public function setpasswordPage(Request $request)
    {
        if(check_active_Account($request->u))
        {
            return redirect('/auth/login');
        }
        return view('app.auth.setPassword');
    }






   /**
    * It takes the email and token from the url and checks if the email and token matches the one in
    * the database. If it does, it updates the status to active and the password to the one the user
    * entered
    *
    * @param Request request The request object.
    *
    * @return A view
    */
    public function activateAccount(Request $request)
    {
        try {
            if($request->password === $request->cpassword)
            {


                $activate_user_account = User::where('email', $request->email)->where('verification_token', $request->token)->update([
                    "status" => "active",
                    "password"=> Hash::make($request->password)
                ]);
                $owner_id = User::where('email',$request->email)->first();

                if($activate_user_account)
                {
                    company::where('owner_id', $owner_id->id)->update(["hosting_location"=>$request->hosting_location]);
                    $request->session()->put('userid', $owner_id->id);
                    return redirect('/auth/onboarding/personalisedSetting?token='.$request->token.'&email='.$request->email);
                }


            }
            else
            {
                return back()->with('error', 'Password & Repeat Password Mismatch');
            }

        } catch (\Throwable $th) {
            return redirect('/error/?msg=account');
        }
    }




    /**
     * It returns the view of the email verification page
     *
     * @return A view called verifyPage.
     */
    public function emailVerifyPage()
    {
        return view('app.auth.verifyPage');
    }




   /**
    * If the user is logged in, redirect them to the client page, otherwise, show them the reset
    * password page
    *
    * @return A view
    */
    public function resetPage()
    {
        if(Session::get('userid')){
            return redirect('/crm/clients/'.Session::get('userid'));
        }
        return view('app.auth.resetPassword');
    }




  /**
   * It sends a password reset link to the user's email address
   *
   * @param Request request The request object.
   *
   * @return A redirect to the reset password page with a request_send parameter set to true.
   */
    public function SendPassword_resetLink(Request $request)
    {
        try {
            $token = Hash::make(Carbon::now());

            $check_user_account = User::where('email', $request->email)->first();
            if($check_user_account)
            {
                $hostname = $request->getHttpHost();
                $body = '
                    <div background-color:(243 244 246); justify-content: center; align-items: center; padding:24px; height:50vh">
                        <div id="main" style="padding: 32px; border-radius:19px; width: 500px;
                            margin: auto;
                            background-color: white;">
                            <center>
                            <h4 style="color:#00302E; font-size:14px;">Hello, '.$request->email.'</h4>
                            <small style="text-align: start;  margin-bottom:20px; color: #00302E;">
                            You can reset your CRMTop password by clicking the link below
                            or copying and pasting it into your browser. For increased security, this password reset
                            link will expire 24 hours after it was sent.</small><br><br>
                            <a href="http://'.$hostname.'/auth/resetpassword?u='.$request->email.'&token='.$token.'&set_pass_form=true" style="padding:12px; background-color:#FF5C35; color:white; border-radius:19px;">Reset Your Password</a>
                            </center>
                        </div>
                        <p style="text-align: center;">Not you? If you didn\'t request password reset for CRMTop Account, you can safely ignore this email. And your password remain same</p>
                    </div>
                    ';


                save_reset_password_token($request->email, $token, 'pending');
                sendEmail($request->email, 'RESET YOUR CRMTOP PASSWORD', $body);
                return redirect('/auth/resetpassword?request_send=true');
            }
            else
            {
                return redirect('/auth/resetpassword?request_send=true');
            }

        } catch (\Throwable $th) {
            return redirect('/error/?msg=reset');
        }
    }



  /**
   * It takes the user's email and token from the URL, checks if the token is valid, if it is, it
   * updates the user's password and sets the token to expired
   *
   * @param Request request The request object.
   *
   * @return A redirect to the login page with a query string parameter of pchange=true
   */
    public function changePasswordFunction(Request $request)
    {
        try {
            if ($request->password == $request->cpassword)
            {
                $check_user_account = User::where('email', $request->u)->update(["password"=> Hash::make($request->password)]);
                if ($check_user_account)
                {
                    passwordReset::where('email', $request->u)->where('token', $request->token)->update(["status" => "expired"]);
                    return redirect('/auth/login/?pchange=true');
                }
            }
            else
            {
                return back()->with('error', 'New Password & Repeat New Password Mismatch');
            }
        } catch (\Throwable $th) {
            return redirect('/error/?msg=reset');
        }
    }




    public function OnboardingPersonalisedSettings(Request $request)
    {
        return view('app.onboarding.personalised');
    }


   /**
    * It logs out the user.
    *
    * @param Request request This is the request object that contains the data sent from the client.
    *
    * @return The userid is being removed from the session and the user is being redirected to the
    * login page.
    */
    public function logoutFunction(Request $request)
    {

        $request->session()->forget('userid');
        return redirect('/auth/login');
    }



   /**
    * It checks if the user exists in the database.
    *
    * @param Request request The request object.
    *
    * @return A string "found"
    */
    public function checkUserifExit(Request $request)
    {
        $user_exit = User::where('email', $request->email)->first();
        if($user_exit){
            return "found";
        }
    }
}
