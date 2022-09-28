<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRMTop @yield('title')</title>
    <link rel="icon" type="image/x-icon" href={{asset('/logo/logo2.png')}}>
    <link rel="stylesheet" href={{asset('/css/app/app.css')}}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    @vite('resources/css/app.css')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</head>


<body onload="checkonline()">

    <header id="no-internet" class="hidden">
        <section  style="margin:auto; max-width:600px;">
            <header>
                <nav class="flex flex-col md:flex-row md:justify-between items-center">
                    <span><img src={{asset('/logo/logo1.png')}} alt="" sizes="" srcset=""></span>
                </nav>
            </header>

            <main>

                <section class="flex flex-col justify-center mt-8 items-center md:flex-row md:gap-4" id="errorPage">
                    <div class="flex flex-col items-center justify-center w-full p-4">
                        <h2 class="text-3xl primary-color font-bold w-full">You appear to be offline</h2>
                        <small class="my-8 w-full">
                            You can't use CRMTop until you're connected to the internet
                        </small>
                    </div>


                    <div class="flex flex-col items-center justify-center mb-20">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-wifi-off" viewBox="0 0 16 16">
                            <path d="M10.706 3.294A12.545 12.545 0 0 0 8 3C5.259 3 2.723 3.882.663 5.379a.485.485 0 0 0-.048.736.518.518 0 0 0 .668.05A11.448 11.448 0 0 1 8 4c.63 0 1.249.05 1.852.148l.854-.854zM8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065 8.448 8.448 0 0 1 3.51-1.27L8 6zm2.596 1.404.785-.785c.63.24 1.227.545 1.785.907a.482.482 0 0 1 .063.745.525.525 0 0 1-.652.065 8.462 8.462 0 0 0-1.98-.932zM8 10l.933-.933a6.455 6.455 0 0 1 2.013.637c.285.145.326.524.1.75l-.015.015a.532.532 0 0 1-.611.09A5.478 5.478 0 0 0 8 10zm4.905-4.905.747-.747c.59.3 1.153.645 1.685 1.03a.485.485 0 0 1 .047.737.518.518 0 0 1-.668.05 11.493 11.493 0 0 0-1.811-1.07zM9.02 11.78c.238.14.236.464.04.66l-.707.706a.5.5 0 0 1-.707 0l-.707-.707c-.195-.195-.197-.518.04-.66A1.99 1.99 0 0 1 8 11.5c.374 0 .723.102 1.021.28zm4.355-9.905a.53.53 0 0 1 .75.75l-10.75 10.75a.53.53 0 0 1-.75-.75l10.75-10.75z"/>
                        </svg>
                    </div>
                </section>

                <section class="p-4">
                    <a onclick="location.reload()" class="animate-pulse p-2 cursor-pointer rounded-full default-btn flex justify-center items-center w-full md:w-1/3">
                        <span>Retry</span>
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
    </header>

    <main id="main-content" class="hidden">
         @yield('content')
    </main>




    <script>

        const main_content = document.querySelector('#main-content')
        const noInternet_msg = document.querySelector('#no-internet')

        function checkonline(){
             if (navigator.onLine)
             {
                 main_content.classList.remove('hidden')
                 noInternet_msg.classList.add('hidden')
                 console.log('online')
             }
             else
             {
                 main_content.classList.add('hidden')
                 noInternet_msg.classList.remove('hidden')
                 console.log('offline')
             }
         }

    </script>
</body>
</html>
