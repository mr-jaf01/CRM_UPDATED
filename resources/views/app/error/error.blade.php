@extends('app.onboarding.layout.masterlayout')
@section('title', 'Internal Server Error')
@section('content')
<section  style="margin:auto; max-width:600px;">
    <header>
        <nav class="flex flex-col md:flex-row md:justify-between items-center">
            <span><img src={{asset('/logo/logo1.png')}} alt="" sizes="" srcset=""></span>
        </nav>
    </header>

    <main>

        <section class="flex flex-col justify-center mt-8 items-center md:flex-row md:gap-4" id="errorPage">
            <div class="flex flex-col items-center justify-center w-full p-4">
                <h2 class="text-3xl primary-color font-bold w-full">Ooops! Can not Handle Your Request</h2>
                <small class="my-8 w-full">This is an <span class="primary-color font-bold">Internal Server Error (Code : 500)</span>, is usually occur when you pass
                    invalid data, empty field, and unrecognized request or system fail to connect database. Please check and try again!. Thank you.
                </small>
            </div>


            <div class="flex flex-col items-center justify-center mb-20">
                <svg class="animate-pulse"  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 22.75C6.07 22.75 1.25 17.93 1.25 12C1.25 6.07 6.07 1.25 12 1.25C17.93 1.25 22.75 6.07 22.75 12C22.75 17.93 17.93 22.75 12 22.75ZM12 2.75C6.9 2.75 2.75 6.9 2.75 12C2.75 17.1 6.9 21.25 12 21.25C17.1 21.25 21.25 17.1 21.25 12C21.25 6.9 17.1 2.75 12 2.75Z" fill="#292D32"/>
                    <path d="M12 13.75C11.59 13.75 11.25 13.41 11.25 13V8C11.25 7.59 11.59 7.25 12 7.25C12.41 7.25 12.75 7.59 12.75 8V13C12.75 13.41 12.41 13.75 12 13.75Z" fill="#292D32"/>
                    <path d="M12 16.9999C11.87 16.9999 11.74 16.9699 11.62 16.9199C11.5 16.8699 11.39 16.7999 11.29 16.7099C11.2 16.6099 11.13 16.5099 11.08 16.3799C11.03 16.2599 11 16.1299 11 15.9999C11 15.8699 11.03 15.7399 11.08 15.6199C11.13 15.4999 11.2 15.3899 11.29 15.2899C11.39 15.1999 11.5 15.1299 11.62 15.0799C11.86 14.9799 12.14 14.9799 12.38 15.0799C12.5 15.1299 12.61 15.1999 12.71 15.2899C12.8 15.3899 12.87 15.4999 12.92 15.6199C12.97 15.7399 13 15.8699 13 15.9999C13 16.1299 12.97 16.2599 12.92 16.3799C12.87 16.5099 12.8 16.6099 12.71 16.7099C12.61 16.7999 12.5 16.8699 12.38 16.9199C12.26 16.9699 12.13 16.9999 12 16.9999Z" fill="#292D32"/>
                </svg>
            </div>
        </section>

        <section class="p-4">
            <a href="/auth/login" class="animate-pulse p-2 rounded-full default-btn flex justify-center items-center w-full  md:w-1/2">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.9993 20.67C14.8093 20.67 14.6193 20.6 14.4693 20.45L7.9493 13.93C6.8893 12.87 6.8893 11.13 7.9493 10.07L14.4693 3.55002C14.7593 3.26002 15.2393 3.26002 15.5293 3.55002C15.8193 3.84002 15.8193 4.32002 15.5293 4.61002L9.0093 11.13C8.5293 11.61 8.5293 12.39 9.0093 12.87L15.5293 19.39C15.8193 19.68 15.8193 20.16 15.5293 20.45C15.3793 20.59 15.1893 20.67 14.9993 20.67Z" fill="#ffffff"/>
                </svg>
                <span>Go back</span>
            </a>
        </section>



        <section>
            <footer class="flex flex-col justify-center items-center md:mt-32">
                <small>© {{date('Y')}} CRMTop, All Rights Reserved.</small>
                <small> <a href="#" class="link-color font-bold ">Privacy Policy</a></small>
            </footer>
        </section>
    </main>


</section>
@endsection
