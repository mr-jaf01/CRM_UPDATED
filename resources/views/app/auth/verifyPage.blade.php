@extends('app.auth.layout.masterlayout')
@section('title', 'Email Verification')
@section('content')
<section class="p-4" style="margin:auto; max-width:900px;">
    <div class="flex flex-col md:flex-row gap-5 md:justify-center md:items-center">

        <div id="signup-form">
            <h4 class="my-8"></h4>
            <div class="flex flex-col items-center justify-center pt-24">
                <h2 class="text-3xl primary-color font-bold text-center">Check your email</h2>
                <p class="text-center my-5">We've sent an email to <span class="primary-color font-bold">xujaf2025@gmail.com</span></p>
                <p class="text-center">Click the link in the email to confirm your address and activate your account.</p>

                <a onclick="location.href='https://mail.google.com/mail'" target="_blank" class="animate-pulse  my-8 p-2 rounded-full default-btn flex justify-between w-1/2 items-center cursor-pointer">
                    <svg  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 21.25H7C6.59 21.25 6.25 20.91 6.25 20.5C6.25 20.09 6.59 19.75 7 19.75H17C19.86 19.75 21.25 18.36 21.25 15.5V8.5C21.25 5.64 19.86 4.25 17 4.25H7C4.14 4.25 2.75 5.64 2.75 8.5C2.75 8.91 2.41 9.25 2 9.25C1.59 9.25 1.25 8.91 1.25 8.5C1.25 4.85 3.35 2.75 7 2.75H17C20.65 2.75 22.75 4.85 22.75 8.5V15.5C22.75 19.15 20.65 21.25 17 21.25Z" fill="#292D32"/>
                        <path d="M11.9988 12.87C11.1588 12.87 10.3088 12.61 9.6588 12.08L6.5288 9.57997C6.2088 9.31997 6.14881 8.84997 6.4088 8.52997C6.66881 8.20997 7.13879 8.14997 7.45879 8.40997L10.5888 10.91C11.3488 11.52 12.6388 11.52 13.3988 10.91L16.5288 8.40997C16.8488 8.14997 17.3288 8.19997 17.5788 8.52997C17.8388 8.84997 17.7888 9.32997 17.4588 9.57997L14.3288 12.08C13.6888 12.61 12.8388 12.87 11.9988 12.87Z" fill="#292D32"/>
                        <path d="M8 17.25H2C1.59 17.25 1.25 16.91 1.25 16.5C1.25 16.09 1.59 15.75 2 15.75H8C8.41 15.75 8.75 16.09 8.75 16.5C8.75 16.91 8.41 17.25 8 17.25Z" fill="#292D32"/>
                        <path d="M5 13.25H2C1.59 13.25 1.25 12.91 1.25 12.5C1.25 12.09 1.59 11.75 2 11.75H5C5.41 11.75 5.75 12.09 5.75 12.5C5.75 12.91 5.41 13.25 5 13.25Z" fill="#292D32"/>
                    </svg>
                    Go to
                    <svg  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 22.75C6.07 22.75 1.25 17.93 1.25 12C1.25 6.07 6.07 1.25 12 1.25C12.41 1.25 12.75 1.59 12.75 2C12.75 2.41 12.41 2.75 12 2.75C6.9 2.75 2.75 6.9 2.75 12C2.75 17.1 6.9 21.25 12 21.25C17.1 21.25 21.25 17.1 21.25 12C21.25 11.59 21.59 11.25 22 11.25C22.41 11.25 22.75 11.59 22.75 12C22.75 17.93 17.93 22.75 12 22.75Z" fill="#292D32"/>
                        <path d="M12.9995 11.75C12.8095 11.75 12.6195 11.68 12.4695 11.53C12.1795 11.24 12.1795 10.76 12.4695 10.47L20.6695 2.26999C20.9595 1.97999 21.4395 1.97999 21.7295 2.26999C22.0195 2.55999 22.0195 3.03999 21.7295 3.32999L13.5295 11.53C13.3795 11.68 13.1895 11.75 12.9995 11.75Z" fill="#292D32"/>
                        <path d="M21.9999 7.58C21.5899 7.58 21.2499 7.24 21.2499 6.83V2.75H17.1699C16.7599 2.75 16.4199 2.41 16.4199 2C16.4199 1.59 16.7599 1.25 17.1699 1.25H21.9999C22.4099 1.25 22.7499 1.59 22.7499 2V6.83C22.7499 7.24 22.4099 7.58 21.9999 7.58Z" fill="#292D32"/>
                    </svg>
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
@endsection
