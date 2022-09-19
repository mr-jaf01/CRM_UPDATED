@extends('app.auth.layout.masterlayout')
@section('title', 'Login')
@section('content')


@if(request('request_form') == 'true')
    <section style="margin:auto; max-width:400px;" class="flex flex-col justify-between mt-8 p-4">
        <header class="mt-8">
            <nav class="flex flex-col  md:justify-between items-center">
                <span><img src={{asset('/logo/logo1.png')}} alt="" sizes="" srcset=""></span>
                <span>Go Back to ? <a href="/auth/login" class="link-color font-bold">Login.</a></span>
            </nav>
        </header>

        <main class="my-3">


                <section id="reset-form">

                        <form action="#" method="POST">
                            @csrf
                            <div class="reset-form-element">

                                <div class="mb-8">
                                    <h2 class="text-3xl my-5 primary-color font-bold text-center">Reset your password</h2>
                                    <small class="flex justify-center text-center">Please enter the email address you'd
                                        like your password reset information sent to.
                                    </small>
                                </div>

                                <div class="my-5">
                                    <label for="reset-email"><small class="primary-color">Email address</small></label>
                                    <input autofocus required class="my-1 p-2 rounded-md outline-none border w-full bg-gray-50" type="email" name="email" id="reset-email">
                                    <small id="email-error-msg" class="secondary-color hidden">Account Not Found with this Email.</small>
                                </div>


                                <div>
                                    <button class="p-2 rounded-full default-btn flex justify-center items-center w-full">Reset your password</button>
                                </div>

                            </div>
                        </form>

                </section>


                <footer class="flex flex-col justify-center items-center mt-8">
                    <small>© {{date('Y')}} CRMTop, All Rights Reserved.</small>
                    <small> <a href="#" class="link-color font-bold">Privacy Policy</a></small>
                </footer>

        </main>
    </section>
@endif



@if (request('set_pass_form') == 'true' && check_reset_password_token_status(request('u'), request('token'))->status == 'pending')
    <section style="margin:auto; max-width:900px;" class="flex flex-col  justify-between mt-8 p-4">
        <header class="mt-8">
            <nav class="flex flex-col md:flex-row  md:justify-between items-center">
                <span><img src={{asset('/logo/logo1.png')}} alt="" sizes="" srcset=""></span>
                <span>Go Back to ? <a href="/auth/login" class="link-color font-bold">Login.</a></span>
            </nav>
        </header>

        <main class="mt-3">
            <section id="set_new_password">
                <form action="/auth/changepassword" method="POST">
                    @csrf
                        <div class="flex flex-col md:flex-row gap-5 md:justify-center md:items-center" id="signup-form">
                                <div class="flex flex-col pt-5 w-full animate__animated animate__zoomIn">

                                    <h2 class="text-3xl primary-color font-bold">Set your new password</h2>
                                    @if (Session::get('error'))
                                        <small class="secondary-color my-3">{{Session::get('error')}}</small>
                                    @endif
                                    <div class="mt-5">
                                        <p style=""></p>
                                        <input autofocus required minlength="8" {{old('password')}} class="p-3 rounded-md outline-none border bg-gray-50 w-full" type="password" name="password" id="pass" placeholder="New Password">
                                    </div>

                                    <div class="mt-5">
                                        <p style=""></p>
                                        <input required minlength="8" {{old('cpassword')}} class="p-3 rounded-md outline-none border bg-gray-50 w-full" type="password" name="cpassword" id="cpass" placeholder="Repeat New Password">
                                        <small id="mismatch_error" class="secondary-color pl-2 hidden">New Password & Repeat New Password Mismatch</small>
                                    </div>

                                    <div class="mt-3 flex flex-col">
                                        <small class="text-gray-500 text-title2 pl-2">At least 8 characters</small>
                                        <small class="text-gray-500 text-title2 pl-2">One lowercase character</small>
                                        <small class="text-gray-500 text-title2 pl-2">One uppercase character</small>
                                        <small class="text-gray-500 text-title2 pl-2">One number, symbol or whitespace character</small>
                                    </div>

                                    <div class="mt-5">
                                        <button class="mb-3 p-2 rounded-full w-full default-btn flex justify-center items-center cursor-pointer" id="location-dataBtn">
                                            Save Password
                                        </button>
                                    </div>

                                </div>

                                <div class="flex flex-col justify-center items-center animate__animated  animate__fadeInDown p-5 w-full">
                                    <video width="320" height="240" autoplay>
                                        <source src={{asset('/logo/lock_center.webm')}} type="video/webm">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                        </div>
                        <input type="hidden" name="u" value={{request('u')}}>
                        <input type="hidden" name="token" value={{request('token')}} />
                </form>
            </section>

            <footer class="flex flex-col justify-center items-center mt-8">
                <small>© {{date('Y')}} CRMTop, All Rights Reserved.</small>
                <small> <a href="#" class="link-color font-bold">Privacy Policy</a></small>
            </footer>


        </main>
    </section>
@else

@endif


@if (request('request_send') == 'true')
<section class="p-4" style="margin:auto; max-width:650px;">
    <div class="flex flex-col md:flex-row gap-5 md:justify-center md:items-center">

        <div id="signup-form">
            <h4 class="my-8"></h4>
            <div class="flex flex-col items-center justify-center pt-24">
                <h2 class="text-3xl primary-color font-bold text-center">Help is on the way</h2>
                <small class="text-center my-5">We're combing through our records to find the CRMTop account for <span class="primary-color font-bold">xujaf2025@gmail.com</span></small>
                <small class="text-center">If we find a match, you'll get an email with further instructions.
                     If you don't hear from us in the next 15 minutes,
                     please double check that you entered the correct email address and check your spam folder.</small>

                <a onclick="location.href='/auth/login'" target="_blank" class="animate-pulse  my-8 p-2 rounded-full default-btn flex justify-center w-1/2 items-center cursor-pointer">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.9993 20.67C14.8093 20.67 14.6193 20.6 14.4693 20.45L7.9493 13.93C6.8893 12.87 6.8893 11.13 7.9493 10.07L14.4693 3.55002C14.7593 3.26002 15.2393 3.26002 15.5293 3.55002C15.8193 3.84002 15.8193 4.32002 15.5293 4.61002L9.0093 11.13C8.5293 11.61 8.5293 12.39 9.0093 12.87L15.5293 19.39C15.8193 19.68 15.8193 20.16 15.5293 20.45C15.3793 20.59 15.1893 20.67 14.9993 20.67Z" fill="#ffffff"/>
                    </svg>
                    Go back
                </a>
            </div>
        </div>

        <div class="flex flex-col justify-center items-center  animate__animated animate__zoomIn p-5">
            <img class="animate-pulse" src={{asset('/image/mail_image.png')}} width="150" height="150" alt="Mail Image" srcset="">
        </div>

    </div>
    <section>
        <footer class="flex flex-col justify-center items-center mt-24">
            <small>© {{date('Y')}} CRMTop, All Rights Reserved.</small>
            <small> <a href="#" class="link-color font-bold ">Privacy Policy</a></small>
        </footer>
    </section>
</section>
@endif



<script>
    // check for password field and repeat password field
    const password = document.querySelector('#pass')
    const cpassword = document.querySelector('#cpass')
    const mismatch_error = document.querySelector('#mismatch_error')

    cpassword.addEventListener('keyup', ()=>{

        if(cpassword.value != password.value)
        {
            mismatch_error.classList.remove('hidden')
        }
        else
        {
            mismatch_error.classList.add('hidden')
        }

    });

    const email_field = document.querySelector('#reset-email');
    const email_error_msg = document.querySelector('#email-error-msg');

        email_field.addEventListener('keyup', ()=>{
        $.get('/api/check_user', {email:email_field.value}, (respone)=>{
            if(respone == "found"){
                email_error_msg.classList.add('hidden')
            }else{
                email_error_msg.classList.remove('hidden')
            }

        })
    });

</script>
@endsection

