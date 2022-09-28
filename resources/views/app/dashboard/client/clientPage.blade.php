@extends('app.dashboard.layout.masterlayout')
@section('title', 'Clients')
@section('content')

<section style="margin:auto; max-width:1200px;">
    <header class="my-3">
        <div class="flex flex-col md:flex-row justify-between items-center">

            @include('app.dashboard.partials._headerNav')

            <p class="flex flex-row items-center">
                <small><a id="importClientBtn" class="py-2 px-5 rounded-sm border-crmPink-100 text-crmPink-100 border cursor-pointer flex justify-center items-center">Import</a></small>
                <small><a id="addClientBtn" class="py-2 px-5 ml-3 rounded-sm default-btn flex justify-center items-center w-full cursor-pointer">Create client</a></small>
            </p>
        </div>

        <div class="flex flex-row my-2 border-b">
            <a class="py-2 px-2 bg-gray-50 border  w-1/2" id="all-clientsBtn">All clients</a>
            <a href="#" class="flex items-center link-color font-bold mx-3"> <small>All views</small></a>
        </div>
   </header>
</section>

<section id="addClientWindow" class="pb-5 hidden absolute bottom-0 right-0 bg-white shadow-lg border-l-1 h-screen w-full md:w-1/3 overflow-y-hidden">
    <form action="#" method="POST">

        <header class="flex flex-row items-center justify-between p-3 bg-white shadow-md primary-color">
            <h2 class="font-semibold tracking-widest">CREATE CLIENT</h2>
            <svg class="cursor-pointer" id="closeClientwindowBtn" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 22.75C6.07 22.75 1.25 17.93 1.25 12C1.25 6.07 6.07 1.25 12 1.25C17.93 1.25 22.75 6.07 22.75 12C22.75 17.93 17.93 22.75 12 22.75ZM12 2.75C6.9 2.75 2.75 6.9 2.75 12C2.75 17.1 6.9 21.25 12 21.25C17.1 21.25 21.25 17.1 21.25 12C21.25 6.9 17.1 2.75 12 2.75Z" fill="#292D32"/>
                <path d="M9.16937 15.5801C8.97937 15.5801 8.78938 15.5101 8.63938 15.3601C8.34938 15.0701 8.34938 14.5901 8.63938 14.3001L14.2994 8.64011C14.5894 8.35011 15.0694 8.35011 15.3594 8.64011C15.6494 8.93011 15.6494 9.41011 15.3594 9.70011L9.69937 15.3601C9.55937 15.5101 9.35937 15.5801 9.16937 15.5801Z" fill="#292D32"/>
                <path d="M14.8294 15.5801C14.6394 15.5801 14.4494 15.5101 14.2994 15.3601L8.63938 9.70011C8.34938 9.41011 8.34938 8.93011 8.63938 8.64011C8.92937 8.35011 9.40937 8.35011 9.69937 8.64011L15.3594 14.3001C15.6494 14.5901 15.6494 15.0701 15.3594 15.3601C15.2094 15.5101 15.0194 15.5801 14.8294 15.5801Z" fill="#292D32"/>
            </svg>
        </header>

        <main class="overflow-auto px-8 py-5">

                <div class="mb-4">
                    <label for="email-address" class="primary-color"><small class="primary-color">Email address</small></label>
                    <input autofocus  required class="my-1 p-2 rounded-md outline-none border w-full bg-gray-50" type="email" name="email" id="email-address">
                </div>

                <div class="grid md:grid-cols-2 gap-2">
                    <div class="mb-4">
                        <label for="first-name" class="primary-color"><small class="primary-color">First name</small></label>
                        <input  class="my-1 p-2 rounded-md outline-none border w-full bg-gray-50" type="text" name="fname" id="first-name">
                    </div>

                    <div class="mb-4">
                        <label for="last-name" class="primary-color"><small class="primary-color">Last name</small></label>
                        <input class="my-1 p-2 rounded-md outline-none border w-full bg-gray-50" type="text" name="lname" id="last-name">
                    </div>
                </div>

                <div class="mb-4">
                    <label for="contact-owner" class="primary-color"><small class="primary-color">Contact owner</small></label>
                    <select class="my-1 p-2 rounded-md outline-none border w-full bg-gray-50" name="conatct-owner" id="contact-owner">
                        <option value="user1">Abdullahi</option>
                        <option value="user2">Musa</option>
                        <option value="user3">Jafar</option>
                        <option value="user4">Muhammad</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="job-title" class="primary-color"><small class="primary-color">Job title</small></label>
                    <input   class="my-1 p-2 rounded-md outline-none border w-full bg-gray-50" type="text" name="job-title" id="job-title">
                </div>

                <div class="mb-4">
                    <label for="phone-number" class="primary-color"><small class="primary-color">Phone number</small></label>
                    <input  required class="my-1 p-2 rounded-md outline-none border w-full bg-gray-50" type="number" name="phonenumber" id="phone-number">
                </div>

                <div class="mb-4">
                    <label for="lifecycle-stage" class="primary-color"><small class="primary-color">Lifecycle stage</small></label>
                    <input   class="my-1 p-2 rounded-md outline-none border w-full bg-gray-50" type="text" name="lifecyclestage" id="lifecycle-stage">
                </div>

                <div class="mb-4">
                    <label for="lead-status" class="primary-color"><small class="primary-color">Lead status</small></label>
                    <select class="my-1 p-2 rounded-md outline-none border w-full bg-gray-50" name="lead-status" id="lead-status">
                        <option value="volvo">Subscriber</option>
                        <option value="saab">Lead</option>
                        <option value="mercedes">Marketing Qualified Lead</option>
                        <option value="audi">Sales Qualified Lead</option>
                        <option value="audi">Opportunity</option>
                        <option value="audi">Customer</option>
                        <option value="audi">Evengelist</option>
                        <option value="audi">Other</option>
                    </select>
                </div>

                <div class="my-4">
                    <p class="my-4">
                        <small>
                            <a  class="primary-color text-title1">Allow your team to markets this contact.</a>
                        </small>
                    </p>
                    <p class="flex flex-row items-center">
                        <input type="checkbox" name="marketingContact" class="h-5 w-5 border-gray-500 shadow-inner text-blue-400 font-bold" /> &nbsp; <small>Set this contact to marketing contact.</small>
                    </p>
                </div>
        </main>

        <footer class="flex flex-col md:flex-row px-5 shadow-md border py-8">
            <button class="py-2 px-5 rounded-sm default-btn flex justify-center items-center w-full cursor-pointer">Create</button>
            <a id="cancelClientwindowBtn" class="py-2 px-5 rounded-sm border-crmPink-100 text-crmPink-100 border w-full cursor-pointer flex justify-center items-center">Cancel</a>
        </footer>

    </form>
</section>


<script src={{asset('/app/dashboard/client/clientPage.js')}}></script>
@endsection
