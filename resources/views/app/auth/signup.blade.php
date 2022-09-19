@extends('app.auth.layout.masterlayout')
@section('title', 'Get started with CRMTop')
@section('content')
    <progress class="w-full hidden animate__animated animate__slideInLeft fixed" value="17" max="100" id="progressBar"></progress>

    <section class="p-4" style="margin:auto; max-width:900px;">
        <header class="">
            <nav class="flex flex-col md:flex-row md:justify-between items-center">
                <span><img src={{asset('/logo/logo1.png')}} alt="" sizes="" srcset=""></span>
                <span>Have an account? <a href="/auth/login" class="link-color font-bold">Sign in.</a></span>
            </nav>
        </header>

        <main class="mt-5">

            <form action="#" method="POST" id="signup-form">
                @csrf

                <section id="personal">
                    <div class="grid md:grid-cols-2 gap-5">

                        <div class="w-full animate__animated animate__zoomIn">
                            <h2 class="text-3xl mb-5 primary-color font-bold">Create your free account</h2>

                            @if(Session::get('error'))
                                 <small class="secondary-color">{{Session::get('error')}}</small>
                             @endif

                            <div class="grid md:grid-cols-2 gap-2 mb-8">
                                <input  class="p-3 rounded-md outline-none border bg-gray-50" autofocus type="text" name="fname" id="" placeholder="First name">
                                <input  class="p-3 rounded-md outline-none border bg-gray-50" type="text" name="lname" id="" placeholder="Last name">
                            </div>

                            <div class="mb-8">
                                <input id="email_field" class="p-3 rounded-md outline-none border w-full bg-gray-50" type="email" name="email" id="" placeholder="Email address">
                                <small id="email-error-msg" class="secondary-color hidden">Account already registered with this email.</small>
                            </div>

                            <div class="mb-8">
                                <a class="p-2 rounded-full default-btn flex justify-center items-center cursor-pointer" id="industryBtn">
                                    Next
                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.90961 20.67C8.71961 20.67 8.52961 20.6 8.37961 20.45C8.08961 20.16 8.08961 19.68 8.37961 19.39L14.8996 12.87C15.3796 12.39 15.3796 11.61 14.8996 11.13L8.37961 4.61002C8.08961 4.32002 8.08961 3.84002 8.37961 3.55002C8.66961 3.26002 9.14961 3.26002 9.43961 3.55002L15.9596 10.07C16.4696 10.58 16.7596 11.27 16.7596 12C16.7596 12.73 16.4796 13.42 15.9596 13.93L9.43961 20.45C9.28961 20.59 9.09961 20.67 8.90961 20.67Z" fill="#292D32"/>
                                    </svg>
                                </a>
                            </div>
                            <center>
                                <span class="text-center mt-5">
                                    <small>We’re committed to your privacy.
                                    CRMTop uses the information you provide to us to
                                    contact you about our relevant content, products, and services.
                                    You may unsubscribe from these communications at
                                    any time. For more information, check out our <a href="#" class="link-color font-bold">Privacy Policy</a>
                                    </small>
                                </span>
                            </center>
                        </div>

                        <div class="flex flex-col justify-center items-center animate__animated animate__fadeInDown">
                            <img src={{asset('/image/signup-image.png')}} alt="" srcset="">
                            <h2 class="text-2xl primary-color font-bold">CRMTop is 100% free.</h2>
                            <span>No credit card needed.</span>
                        </div>
                    </div>
                </section>


                <section id="industry" class="hidden">
                    <div class="grid md:grid-cols-2 gap-5">
                        <div>
                            <a  class="link-color font-bold backBtn flex hover:underline cursor-pointer" id="backBtn-personal">
                                <svg  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.9993 20.67C14.8093 20.67 14.6193 20.6 14.4693 20.45L7.9493 13.93C6.8893 12.87 6.8893 11.13 7.9493 10.07L14.4693 3.55002C14.7593 3.26002 15.2393 3.26002 15.5293 3.55002C15.8193 3.84002 15.8193 4.32002 15.5293 4.61002L9.0093 11.13C8.5293 11.61 8.5293 12.39 9.0093 12.87L15.5293 19.39C15.8193 19.68 15.8193 20.16 15.5293 20.45C15.3793 20.59 15.1893 20.67 14.9993 20.67Z" fill="#292D32"/>
                                </svg>
                                Back
                            </a>
                            <h4 class="my-8">Nice to meet you!</h4>
                            <div>
                                <h2 class="text-3xl primary-color font-bold">What industry are you in ?</h2>
                                <input class="p-3 border outline-none w-full rounded-md my-8 bg-gray-50" type="search" name="company_industry"  placeholder="Search industries"/>
                            </div>

                            <a class="mb-3 p-2 rounded-full default-btn flex justify-center items-center cursor-pointer" id="joberoleBtn">
                                Next
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.90961 20.67C8.71961 20.67 8.52961 20.6 8.37961 20.45C8.08961 20.16 8.08961 19.68 8.37961 19.39L14.8996 12.87C15.3796 12.39 15.3796 11.61 14.8996 11.13L8.37961 4.61002C8.08961 4.32002 8.08961 3.84002 8.37961 3.55002C8.66961 3.26002 9.14961 3.26002 9.43961 3.55002L15.9596 10.07C16.4696 10.58 16.7596 11.27 16.7596 12C16.7596 12.73 16.4796 13.42 15.9596 13.93L9.43961 20.45C9.28961 20.59 9.09961 20.67 8.90961 20.67Z" fill="#292D32"/>
                                </svg>
                            </a>

                        </div>

                        <div class="flex flex-col justify-center items-center animate__animated animate__zoomIn">
                            <img src={{asset("/image/crmtop_image3.png")}} alt="crm top image"  srcset="">
                            <h2 class="text-2xl primary-color font-bold mt-2">Call App, Email, and Task Management</h2>
                            <span class="text-center mt-2">All the tools you need in one place to manage customers.</span>
                        </div>

                    </div>
                </section>


                <section id="job_role" class="hidden">

                    <div class="grid md:grid-cols-2 gap-5">
                        <div>
                            <a  class="link-color font-bold backBtn flex hover:underline cursor-pointer" id="backBtn-industry">
                                <svg  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.9993 20.67C14.8093 20.67 14.6193 20.6 14.4693 20.45L7.9493 13.93C6.8893 12.87 6.8893 11.13 7.9493 10.07L14.4693 3.55002C14.7593 3.26002 15.2393 3.26002 15.5293 3.55002C15.8193 3.84002 15.8193 4.32002 15.5293 4.61002L9.0093 11.13C8.5293 11.61 8.5293 12.39 9.0093 12.87L15.5293 19.39C15.8193 19.68 15.8193 20.16 15.5293 20.45C15.3793 20.59 15.1893 20.67 14.9993 20.67Z" fill="#292D32"/>
                                </svg>
                                Back
                            </a>
                            <h4 class="my-8"></h4>
                            <div>
                                <h2 class="text-3xl primary-color font-bold">What is your job role ?</h2>
                                <input class="p-3 border outline-none w-full rounded-md my-8 bg-gray-50" type="search" name="role"  placeholder="Search job roles"/>
                            </div>

                            <a class="mb-3 p-2 rounded-full default-btn flex justify-center items-center cursor-pointer" id="cnameBtn">
                                Next
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.90961 20.67C8.71961 20.67 8.52961 20.6 8.37961 20.45C8.08961 20.16 8.08961 19.68 8.37961 19.39L14.8996 12.87C15.3796 12.39 15.3796 11.61 14.8996 11.13L8.37961 4.61002C8.08961 4.32002 8.08961 3.84002 8.37961 3.55002C8.66961 3.26002 9.14961 3.26002 9.43961 3.55002L15.9596 10.07C16.4696 10.58 16.7596 11.27 16.7596 12C16.7596 12.73 16.4796 13.42 15.9596 13.93L9.43961 20.45C9.28961 20.59 9.09961 20.67 8.90961 20.67Z" fill="#292D32"/>
                                </svg>
                            </a>
                        </div>

                        <div class="flex flex-col justify-center items-center animate__animated animate__fadeInDown">
                            <img src={{asset("/image/crmimage.png")}} alt="crm top image" width="250" height="250" srcset="">
                            <h2 class="text-2xl primary-color font-bold mt-8">Grow traffic. Convert leads.</h2>
                            <span class="text-center mt-8">All the tools you need to attract, generate,
                                 and nurture prospective customers and leads.
                            </span>
                        </div>
                    </div>

                </section>


                <section id="company_name" class="hidden">

                    <div class="grid md:grid-cols-2 gap-5">
                        <div>
                            <a  class="link-color font-bold backBtn flex hover:underline cursor-pointer" id="backBtn-job_role">
                                <svg  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.9993 20.67C14.8093 20.67 14.6193 20.6 14.4693 20.45L7.9493 13.93C6.8893 12.87 6.8893 11.13 7.9493 10.07L14.4693 3.55002C14.7593 3.26002 15.2393 3.26002 15.5293 3.55002C15.8193 3.84002 15.8193 4.32002 15.5293 4.61002L9.0093 11.13C8.5293 11.61 8.5293 12.39 9.0093 12.87L15.5293 19.39C15.8193 19.68 15.8193 20.16 15.5293 20.45C15.3793 20.59 15.1893 20.67 14.9993 20.67Z" fill="#292D32"/>
                                </svg>
                                Back
                            </a>
                            <h4 class="my-8"></h4>
                            <div>
                                <h2 class="text-3xl primary-color font-bold">What is your company's name ?</h2>
                                <input class="p-3 border outline-none w-full rounded-md my-8 bg-gray-50" type="text" name="company_name"  placeholder="Company name"/>
                            </div>

                            <a class="mb-3 p-2 rounded-full default-btn flex justify-center items-center cursor-pointer" id="csizeBtn">
                                Next
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.90961 20.67C8.71961 20.67 8.52961 20.6 8.37961 20.45C8.08961 20.16 8.08961 19.68 8.37961 19.39L14.8996 12.87C15.3796 12.39 15.3796 11.61 14.8996 11.13L8.37961 4.61002C8.08961 4.32002 8.08961 3.84002 8.37961 3.55002C8.66961 3.26002 9.14961 3.26002 9.43961 3.55002L15.9596 10.07C16.4696 10.58 16.7596 11.27 16.7596 12C16.7596 12.73 16.4796 13.42 15.9596 13.93L9.43961 20.45C9.28961 20.59 9.09961 20.67 8.90961 20.67Z" fill="#292D32"/>
                                </svg>
                            </a>
                        </div>

                        <div class="flex flex-col justify-center items-center animate__animated animate__zoomIn">
                            <img src={{asset("/image/crmimage2.png")}} alt="crm top image" width="400" height="400" srcset="">
                            <h2 class="text-2xl primary-color font-bold mt-8 text-center">Marketing, Sales, Support and Feedback.</h2>
                            <span class="text-center mt-8">All the tools you need to attract, engage,
                                 and maintain effective communications between your customers and leads.
                            </span>
                        </div>
                    </div>

                </section>


                <section id="company_size" class="hidden">

                    <div class="grid md:grid-cols-2 gap-5">
                        <div>
                            <a  class="link-color font-bold backBtn flex hover:underline cursor-pointer" id="backBtn-company_name">
                                <svg  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.9993 20.67C14.8093 20.67 14.6193 20.6 14.4693 20.45L7.9493 13.93C6.8893 12.87 6.8893 11.13 7.9493 10.07L14.4693 3.55002C14.7593 3.26002 15.2393 3.26002 15.5293 3.55002C15.8193 3.84002 15.8193 4.32002 15.5293 4.61002L9.0093 11.13C8.5293 11.61 8.5293 12.39 9.0093 12.87L15.5293 19.39C15.8193 19.68 15.8193 20.16 15.5293 20.45C15.3793 20.59 15.1893 20.67 14.9993 20.67Z" fill="#292D32"/>
                                </svg>
                                Back
                            </a>
                            <h4 class=""></h4>
                            <div class="mt-3">
                                <h2 class="text-3xl primary-color font-bold">How many people work at your company ?</h2>

                                <div class="grid md:grid-cols-3 gap-4 my-1">
                                    <div id="companySize1" class="custom-border flex  border shadow-lg p-5 text-center rounded-md">1</div>
                                    <div id="companySize2" class="custom-border flex justify-between items-center border shadow-lg p-5 text-center rounded-md">2 - 5</div>
                                    <div id="companySize3" class="custom-border flex justify-between items-center border shadow-lg p-5 text-center rounded-md">6 - 10</div>
                                </div>

                                <div class="grid md:grid-cols-3 gap-4 my-1">
                                    <div id="companySize4" class="custom-border flex justify-between items-center border shadow-lg p-5 text-center rounded-md">11 - 25</div>
                                    <div id="companySize5" class="custom-border flex justify-between items-center border shadow-lg p-5 text-center rounded-md">26 - 50</div>
                                    <div id="companySize6" class="custom-border flex justify-between items-center border shadow-lg p-5 text-center rounded-md">51 - 200</div>
                                </div>

                                <div class="grid md:grid-cols-3 gap-4 my-1">
                                    <div id="companySize7" class="custom-border flex justify-between items-center border shadow-lg p-5 text-center rounded-md">201 - 1,000</div>
                                    <div id="companySize8" class="custom-border flex justify-between items-center border shadow-lg p-5 text-center rounded-md">1,001 - 10,000</div>
                                    <div id="companySize9" class="custom-border flex justify-between items-center border shadow-lg p-5 text-center rounded-md">10,001 or more</div>
                                </div>

                            </div>

                            <a class="my-4 p-2 rounded-full default-btn flex justify-center items-center cursor-pointer" id="cdomainBtn">
                                Next
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.90961 20.67C8.71961 20.67 8.52961 20.6 8.37961 20.45C8.08961 20.16 8.08961 19.68 8.37961 19.39L14.8996 12.87C15.3796 12.39 15.3796 11.61 14.8996 11.13L8.37961 4.61002C8.08961 4.32002 8.08961 3.84002 8.37961 3.55002C8.66961 3.26002 9.14961 3.26002 9.43961 3.55002L15.9596 10.07C16.4696 10.58 16.7596 11.27 16.7596 12C16.7596 12.73 16.4796 13.42 15.9596 13.93L9.43961 20.45C9.28961 20.59 9.09961 20.67 8.90961 20.67Z" fill="#292D32"/>
                                </svg>
                            </a>

                        </div>

                        <div class="flex flex-col justify-center items-center animate__animated animate__zoomIn">
                            <img src={{asset("/image/crm_roundtable.png")}} alt="crm top image" width="400" height="400" srcset="">
                            <h2 class="text-2xl primary-color font-bold mt-8 text-center">Support and Feedback.</h2>
                        </div>
                    </div>

                </section>

                <section id="company_domain" class="hidden">

                    <div class="grid md:grid-cols-2 gap-5">

                        <div>
                            <a  class="link-color font-bold backBtn flex hover:underline cursor-pointer" id="backBtn-company_size">
                                <svg  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.9993 20.67C14.8093 20.67 14.6193 20.6 14.4693 20.45L7.9493 13.93C6.8893 12.87 6.8893 11.13 7.9493 10.07L14.4693 3.55002C14.7593 3.26002 15.2393 3.26002 15.5293 3.55002C15.8193 3.84002 15.8193 4.32002 15.5293 4.61002L9.0093 11.13C8.5293 11.61 8.5293 12.39 9.0093 12.87L15.5293 19.39C15.8193 19.68 15.8193 20.16 15.5293 20.45C15.3793 20.59 15.1893 20.67 14.9993 20.67Z" fill="#292D32"/>
                                </svg>
                                Back
                            </a>
                            <div>
                                <h2 class="text-3xl primary-color font-bold my-4">What is your company's website? <small class="text-gray-500 text-title2">Optional</small></h2>
                                <input class="p-3 border outline-none w-full rounded-md my-8 bg-gray-50" type="text" name="company_domain"  placeholder="www.companywebsite.com"/>
                            </div>
                            <button class=" p-2 rounded-full default-btn flex justify-center items-center w-full">Next</button>
                        </div>

                        <div class="flex flex-col justify-center items-center animate__animated animate__zoomIn">
                            <img src={{asset("/image/crm5.png")}}  alt="crm top image" height="600"  srcset="" class="mt-5">
                            <h2 class="text-2xl primary-color font-bold my-8">Effective Communications.</h2>
                        </div>

                    </div>

                </section>

                <input id="setCompanySize" type="hidden" name="company_size" />
            </form>

        </main>
        <script src={{asset('/js/app/signup.js')}}></script>
    </section>



    <script>
        const email_field = document.querySelector('#email_field');
        const email_error_msg = document.querySelector('#email-error-msg');

            email_field.addEventListener('keyup', ()=>{
            $.get('/api/check_user', {email:email_field.value}, (respone)=>{
                if(respone == "found"){
                    email_error_msg.classList.remove('hidden')
                }else{
                    email_error_msg.classList.add('hidden')
                }

            })
        })
    </script>
@endsection
