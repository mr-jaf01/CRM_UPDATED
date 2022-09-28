@extends('app.dashboard.layout.masterlayout')
@section('title', 'Agents')
@section('content')

<section style="margin:auto; max-width:1200px;">
    <header class="my-3">
        <div class="flex flex-col md:flex-row justify-between items-center">
            @include('app.dashboard.partials._headerNav')

            <p class="flex flex-row">
                <small><a id="importAgentBtn" class="py-2 px-5 rounded-sm border-crmPink-100 text-crmPink-100 border cursor-pointer flex justify-center items-center">Import</a></small>
                <small><a id="addAgentBtn" class="py-2 px-5 ml-3 rounded-sm default-btn flex justify-center items-center w-full cursor-pointer">Create agent</a></small>
            </p>
        </div>

        <div class="flex flex-row my-2 border-b">
            <a class="py-2 px-2 bg-gray-50 border border-r-2 w-1/2 cursor-pointer hover:bg-gray-100">All agents</a>
            <a href="#" class="flex items-center link-color font-bold mx-3"> <small>All views</small></a>
        </div>
   </header>
</section>


<section id="addAgentWindow" class="pb-5 hidden absolute bottom-0 right-0 bg-white shadow-lg border-l-1 h-screen w-full md:w-1/3 overflow-y-hidden">

    <header class="flex flex-row items-center justify-between p-3 bg-white shadow-md primary-color">
        <h2 class="font-semibold tracking-widest">CREATE AGENT</h2>
        <svg class="cursor-pointer" id="closeAgentwindowBtn" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 22.75C6.07 22.75 1.25 17.93 1.25 12C1.25 6.07 6.07 1.25 12 1.25C17.93 1.25 22.75 6.07 22.75 12C22.75 17.93 17.93 22.75 12 22.75ZM12 2.75C6.9 2.75 2.75 6.9 2.75 12C2.75 17.1 6.9 21.25 12 21.25C17.1 21.25 21.25 17.1 21.25 12C21.25 6.9 17.1 2.75 12 2.75Z" fill="#292D32"/>
            <path d="M9.16937 15.5801C8.97937 15.5801 8.78938 15.5101 8.63938 15.3601C8.34938 15.0701 8.34938 14.5901 8.63938 14.3001L14.2994 8.64011C14.5894 8.35011 15.0694 8.35011 15.3594 8.64011C15.6494 8.93011 15.6494 9.41011 15.3594 9.70011L9.69937 15.3601C9.55937 15.5101 9.35937 15.5801 9.16937 15.5801Z" fill="#292D32"/>
            <path d="M14.8294 15.5801C14.6394 15.5801 14.4494 15.5101 14.2994 15.3601L8.63938 9.70011C8.34938 9.41011 8.34938 8.93011 8.63938 8.64011C8.92937 8.35011 9.40937 8.35011 9.69937 8.64011L15.3594 14.3001C15.6494 14.5901 15.6494 15.0701 15.3594 15.3601C15.2094 15.5101 15.0194 15.5801 14.8294 15.5801Z" fill="#292D32"/>
        </svg>
    </header>

    <main class="overflow-auto px-8 py-5">

        <div class="grid md:grid-cols-2 gap-2 mb-4">
            <div class="mb-4">
                <label for="first-name" class="primary-color"><small class="primary-color">Company domain name</small></label>
                <input autofocus  required class="my-1 p-2 rounded-md outline-none border w-full bg-gray-50" type="text" name="fname" id="first-name">
            </div>

            <div class="mb-4">
                <label for="last-name" class="primary-color"><small class="primary-color">Company name</small></label>
                <input class="my-1 p-2 rounded-md outline-none border w-full bg-gray-50" type="text" name="lname" id="last-name">
            </div>
        </div>

        <div class="mb-4">
            <label for="email-address" class="primary-color"><small class="primary-color">Company owner</small></label>
            <input  class="my-1 p-2 rounded-md outline-none border w-full bg-gray-50" type="email" name="email" id="email-address">
        </div>

        <div class="mb-4">
            <label for="contact-owner" class="primary-color"><small class="primary-color">Industry</small></label>
            <input   class="my-1 p-2 rounded-md outline-none border w-full bg-gray-50" type="text" name="contactowner" id="contact-owner">
        </div>

        <div class="mb-4">
            <label for="job-title" class="primary-color"><small class="primary-color">Type</small></label>
            <input   class="my-1 p-2 rounded-md outline-none border w-full bg-gray-50" type="text" name="job-title" id="job-title">
        </div>

        <div class="mb-4">
            <label for="phone-number" class="primary-color"><small class="primary-color">City</small></label>
            <input  class="my-1 p-2 rounded-md outline-none border w-full bg-gray-50" type="number" name="phonenumber" id="phone-number">
        </div>

        <div class="mb-4">
            <label for="lifecycle-stage" class="primary-color"><small class="primary-color">State/Region</small></label>
            <input  class="my-1 p-2 rounded-md outline-none border w-full bg-gray-50" type="text" name="lifecyclestage" id="lifecycle-stage">
        </div>

        <div class="mb-4">
            <label for="lead-status" class="primary-color"><small class="primary-color">Postal code</small></label>
            <input  class="my-1 p-2 rounded-md outline-none border w-full bg-gray-50" type="text" name="leadstatus" id="lead-status">
        </div>

        <div class="mb-4">
            <label for="lead-status" class="primary-color"><small class="primary-color">Number of employees</small></label>
            <input  class="my-1 p-2 rounded-md outline-none border w-full bg-gray-50" type="text" name="leadstatus" id="lead-status">
        </div>

        <div class="mb-4">
            <label for="lead-status" class="primary-color"><small class="primary-color">Annual revenue</small></label>
            <input  class="my-1 p-2 rounded-md outline-none border w-full bg-gray-50" type="text" name="leadstatus" id="lead-status">
        </div>

        <div class="mb-4">
            <label for="lead-status" class="primary-color"><small class="primary-color">Time zone</small></label>
            <input  class="my-1 p-2 rounded-md outline-none border w-full bg-gray-50" type="text" name="leadstatus" id="lead-status">
        </div>

        <div class="mb-4">
            <label for="lead-status" class="primary-color"><small class="primary-color">Description</small></label>
            <input  class="my-1 p-2 rounded-md outline-none border w-full bg-gray-50" type="text" name="leadstatus" id="lead-status">
        </div>

        <div class="mb-4">
            <label for="lead-status" class="primary-color"><small class="primary-color">Linkedln company page</small></label>
            <input  class="my-1 p-2 rounded-md outline-none border w-full bg-gray-50" type="text" name="leadstatus" id="lead-status">
        </div>

    </main>

    <footer class="flex flex-col md:flex-row px-5 shadow-md border py-8">
        <button class="py-2 px-5 rounded-sm default-btn flex justify-center items-center w-full cursor-pointer">Create</button>
        <a id="cancelAgentwindowBtn" class="py-2 px-5 rounded-sm border-crmPink-100 text-crmPink-100 border w-full cursor-pointer flex justify-center items-center">Cancel</a>
    </footer>

</section>

<script src={{asset('/app/dashboard/agent/agentPage.js')}}></script>
@endsection
