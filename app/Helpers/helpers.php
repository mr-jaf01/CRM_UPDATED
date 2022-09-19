<?php

use Carbon\Carbon;

use App\Models\User;
use App\Models\passwordReset;

/**
 * Write code on Method
 *
 * @return response()
 */
if (! function_exists('convertYmdToMdy')) {
    function convertYmdToMdy($date)
    {
        return Carbon::createFromFormat('Y-m-d', $date)->format('m-d-Y');
    }
}

/**
 * Write code on Method
 *
 * @return response()
 */
if (! function_exists('convertMdyToYmd')) {
    function convertMdyToYmd($date)
    {
        return Carbon::createFromFormat('m-d-Y', $date)->format('Y-m-d');
    }
}

/* Checking if the user is active or not. */
if(! function_exists('check_active_Account')){
    function check_active_Account($email)
    {
        return User::where('email', $email)->where('status', 'active')->first();
    }
}


/* Checking if the function exists. If it does not exist, it will create the function. */
if(! function_exists('save_reset_password_token')){
    function save_reset_password_token($email, $token, $status)
    {
        $new_reset_token = new passwordReset();
        $new_reset_token->email = $email;
        $new_reset_token->token = $token;
        $new_reset_token->status = $status;
        $new_reset_token->save();
    }
}


/* Checking if the function exists. If it does not exist, it will create the function. */
if(! function_exists('check_reset_password_token_status')){
    function check_reset_password_token_status($email, $token)
    {
       return passwordReset::where('email', $email)->where('token', $token)->first();
    }
}
