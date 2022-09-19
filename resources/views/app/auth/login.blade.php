@extends('app.auth.layout.masterlayout')
@section('title', 'Login')
@section('content')
    <section style="margin:auto; max-width:400px;" class="flex flex-col justify-between mt-8 p-4">
        <header class="mt-8">
            <nav class="flex flex-col  md:justify-between items-center">
                <span><img src={{asset('/logo/logo1.png')}} alt="" sizes="" srcset=""></span>
                <span>Don't have an account ? <a href="/auth/signup" class="link-color font-bold">Sign up.</a></span>
            </nav>
        </header>

        <main class="my-5">
            <div class="text-center">
                @if (Session::get('error'))
                <span class="secondary-color font-bold">{{Session::get('error')}}</span>
                @endif
                @if (request('pchange') == 'true')
                    <span class="primary-color">Password Change Successfully</span>
                @endif
            </div>

            <section id="login-form">
                    <form action="#" method="POST">
                        @csrf
                        <div class="login-form-element">

                            <div class="mb-8">
                                <label for="email-login" class="primary-color"><small class="primary-color">Email address</small></label>
                                <input autofocus  required class="my-1 p-2 rounded-md outline-none border w-full bg-gray-50" type="email" name="email" id="email-login">
                            </div>

                            <div>
                                <label for="pass-login"><small class="primary-color">Password</small></label>
                                <input minlength="8" class="my-1 p-2 rounded-md outline-none border w-full bg-gray-50" type="password" name="password" id="pass-login">
                            </div>

                            <div class="my-4">
                                <p class="my-4">
                                    <small>
                                        <a href="/auth/resetpassword?request_form=true" class="link-color font-bold">Forgot my password</a>
                                    </small>
                                </p>
                                <p class="flex flex-row items-center">
                                    <input type="checkbox" id="remember" class="h-5 w-5 border-gray-500 shadow-inner text-blue-400 font-bold" /> &nbsp; <span>Remember me</span>
                                </p>
                            </div>

                            <div>
                                <button class="p-2 rounded-full default-btn flex justify-center items-center w-full">Login</button>
                            </div>

                        </div>
                    </form>
                    <div id="social-links-login">

                    </div>
            </section>

            <footer class="flex flex-col justify-center items-center mt-8">
                <small>© {{date('Y')}} CRMTop, All Rights Reserved.</small>
                <small> <a href="#" class="link-color font-bold">Privacy Policy</a></small>
            </footer>

        </main>
    </section>
@endsection
