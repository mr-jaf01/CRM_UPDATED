@extends('app.onboarding.layout.masterlayout')
@section('title', 'Onboarding & Personalisation')
@section('content')
<section  style="margin:auto; max-width:1000px;">
    <header>
        <nav class="flex flex-col md:flex-row md:justify-between items-center">
            <span><img src={{asset('/logo/logo1.png')}} alt="" sizes="" srcset=""></span>
        </nav>
    </header>

    <main>

        <section class="grid md:grid-cols-2 md:gap-4" id="personalised">
            <div class="flex flex-col">
                <h2 class="text-3xl primary-color font-bold">Which of these sounds most like you?</h2>
                <p class="my-3">This will help us to give you the best start.</p>

                <div class="flex flex-col" id="options">

                    <a class="p-8 rounded-md border text-center my-3 cursor-pointer custom-border shadow-md">
                        I have never used a CRM system before.
                    </a>

                    <a  class="p-8 rounded-md border text-center my-3 cursor-pointer custom-border shadow-md">
                        I am new to CRMTop, but I have used a CRM system before.
                    </a>

                    <a  class="p-8 rounded-md border text-center my-3 cursor-pointer custom-border shadow-md">
                        I know my way around CRM systems very well.
                    </a>
                </div>
            </div>
            <div class="flex flex-col items-center justify-center">
                <img src={{asset('/image/onboarding.png')}} alt="CRMTop Onboarding" width="300"  class="animate__animated animate__zoomIn">
                <p class="text-center my-4">Your <span class="text-2xl font-bold primary-color">CRM</span> is the <span class="text-2xl font-bold primary-color">central place</span> for all your marketing, sales, and service information.</p>
            </div>
        </section>





        <section>
            <footer class="flex flex-col justify-center items-center mt-8">
                <small>© {{date('Y')}} CRMTop, All Rights Reserved.</small>
                <small> <a href="#" class="link-color font-bold ">Privacy Policy</a></small>
            </footer>
        </section>
    </main>


</section>
@endsection
