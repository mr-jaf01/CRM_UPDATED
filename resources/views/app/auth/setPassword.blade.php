@extends('app.auth.layout.masterlayout')
@section('title', 'Get started with CRMTop')
@section('content')
<section class="p-4" style="margin:auto; max-width:900px;">

<form action={{route('activate.account')}} method="POST">
    @csrf
    <header>
        <nav class="flex flex-col md:flex-row md:justify-between items-center">
            <span><img src={{asset('/logo/logo1.png')}} alt="" sizes="" srcset=""></span>
            <span>Have an account? <a href="/auth/login" class="link-color font-bold">Sign in.</a></span>
        </nav>
    </header>

    <main>
        <section id="set-password">
            <div class="flex flex-col md:flex-row gap-5 md:justify-center md:items-center" id="signup-form">
                    <div class="flex flex-col pt-5 w-full animate__animated animate__zoomIn">

                        <h2 class="text-3xl primary-color font-bold">Create your password</h2>
                        @if (Session::get('error'))
                            <small class="secondary-color my-3">{{Session::get('error')}}</small>
                        @endif
                        <div class="mt-5">
                            <p style=""></p>
                            <input required minlength="8" {{old('password')}} class="p-3 rounded-md outline-none border bg-gray-50 w-full" type="password" name="password" id="pass" placeholder="Password">
                        </div>

                        <div class="mt-5">
                            <p style=""></p>
                            <input required minlength="8" {{old('cpassword')}} class="p-3 rounded-md outline-none border bg-gray-50 w-full" type="password" name="cpassword" id="cpass" placeholder="Repeat Password">
                            <small id="mismatch_error" class="secondary-color pl-2 hidden font-bold">Password & Repeat Password Mismatch</small>
                        </div>

                        <div class="mt-5">
                            <p class="text-gray-500 text-title2 pl-2">At least 8 characters</p>
                            <p class="text-gray-500 text-title2 pl-2">One lowercase character</p>
                            <p class="text-gray-500 text-title2 pl-2">One uppercase character</p>
                            <p class="text-gray-500 text-title2 pl-2">One number, symbol or whitespace character</p>
                        </div>

                        <div class="mt-5">
                            <a class="mb-3 p-2 rounded-full default-btn flex justify-center items-center cursor-pointer" id="location-dataBtn">
                                Next
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.90961 20.67C8.71961 20.67 8.52961 20.6 8.37961 20.45C8.08961 20.16 8.08961 19.68 8.37961 19.39L14.8996 12.87C15.3796 12.39 15.3796 11.61 14.8996 11.13L8.37961 4.61002C8.08961 4.32002 8.08961 3.84002 8.37961 3.55002C8.66961 3.26002 9.14961 3.26002 9.43961 3.55002L15.9596 10.07C16.4696 10.58 16.7596 11.27 16.7596 12C16.7596 12.73 16.4796 13.42 15.9596 13.93L9.43961 20.45C9.28961 20.59 9.09961 20.67 8.90961 20.67Z" fill="#292D32"/>
                                </svg>
                            </a>
                        </div>

                    </div>

                    <div class="flex flex-col justify-center items-center animate__animated  animate__fadeInDown p-5 w-full">
                        <video width="320" height="240" autoplay>
                            <source src={{asset('/logo/lock_center.webm')}} type="video/webm">
                            Your browser does not support the video tag.
                        </video>
                    </div>

            </div>
        </section>


        <section class="location-data hidden">
            <div class="flex flex-col md:flex-row gap-5 md:justify-center md:items-center" >
                <!--- Left Colunm --->
                    <div class="flex flex-col w-full animate__animated animate__fadeInDown ">

                        <a  class="my-4 link-color font-bold backBtn flex hover:underline cursor-pointer" id="backBtn-setPassword">
                            <svg width="24" height="24"  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.9993 20.67C14.8093 20.67 14.6193 20.6 14.4693 20.45L7.9493 13.93C6.8893 12.87 6.8893 11.13 7.9493 10.07L14.4693 3.55002C14.7593 3.26002 15.2393 3.26002 15.5293 3.55002C15.8193 3.84002 15.8193 4.32002 15.5293 4.61002L9.0093 11.13C8.5293 11.61 8.5293 12.39 9.0093 12.87L15.5293 19.39C15.8193 19.68 15.8193 20.16 15.5293 20.45C15.3793 20.59 15.1893 20.67 14.9993 20.67Z" fill="#5291AE"/>
                            </svg>
                            Back
                        </a>

                        <h2 class="text-3xl primary-color font-bold">Where would you like your data to be hosted?</h2>
                        <small class="text-title2 my-2">Recommended based on your location:</small>

                        <div class="mt-2 flex flex-col md:flex-row">
                            <label for="eu" class="p-5 border w-full location">
                                <input type="radio" value="EU" checked name="hosting_location" id="eu">
                                EU
                            </label>

                            <label for="us" class="p-5 border w-full location" style="">
                                <input type="radio" value="US" name="hosting_location" id="us">
                                US
                            </label>

                            <label for="uk" class="p-5 border w-full location" style="">
                                <input type="radio" value="UK" name="hosting_location" id="uk">
                                UK
                            </label>

                            <label for="ng" class="p-5 border w-full location" style="">
                                <input type="radio" value="NG" name="hosting_location" id="ng">
                                NG
                            </label>
                        </div>

                        <div class="mt-2 flex flex-col md:flex-row">
                            <label for="af" class="p-5 border w-full location">
                                <input type="radio" value="AF" name="hosting_location" id="af">
                                AF
                            </label>

                            <label for="sa" class="p-5 border w-full location" style="">
                                <input type="radio" value="SA" name="hosting_location" id="sa">
                                SA
                            </label>

                            <label for="as" class="p-5 border w-full location" style="">
                                <input type="radio" value="AS" name="hosting_location" id="as">
                                AS
                            </label>

                            <label for="na" class="p-5 border w-full location" style="">
                                <input type="radio" value="NA" name="hosting_location" id="na">
                                NA
                            </label>
                        </div>

                        <div class="mt-5">
                            <button class="mb-3 p-2 text-center w-full rounded-full default-btn flex justify-center items-center cursor-pointer" id="joberoleBtn">
                                Create account
                            </button>
                        </div>

                        <div class="text-center">
                            <small>
                                By creating an account you are agreeing to the <a href="#" class="link-color font-bold">CRMTop Customer Terms of Service</a>
                            </small>
                        </div>
                    </div>
                <!--- Right Column -->
                <div class="flex flex-col justify-center  items-center animate__animated animate__zoomIn w-full ">
                    <img src={{asset('/image/server.png')}} alt="">
                </div>

            </div>
        </section>


        <section>
            <footer class="flex flex-col justify-center items-center mt-8">
                <small>© {{date('Y')}} CRMTop, All Rights Reserved.</small>
                <small> <a href="#" class="link-color font-bold ">Privacy Policy</a></small>
            </footer>
        </section>
    </main>
    <input type="hidden" name="email"  value={{request('u')}} />
    <input type="hidden" name="token"  value={{request('token')}} />
</form>







</section>

<script>
    const location_dataBtn = document.querySelector('#location-dataBtn');
    const setPassword_screen = document.querySelector('#set-password');
    const locationdata_screen = document.querySelector('.location-data');
    const backBtn_setPassword = document.querySelector('#backBtn-setPassword');


    location_dataBtn.addEventListener('click', ()=>{
        setPassword_screen.classList.add('hidden');
        locationdata_screen.classList.remove('hidden');
    });

    backBtn_setPassword.addEventListener('click', ()=>{
        setPassword_screen.classList.remove('hidden');
        locationdata_screen.classList.add('hidden');
    });

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
</script>
@endsection
