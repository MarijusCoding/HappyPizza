<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link href='{{ favicon('css/favicon.ico') }}' rel="icon" type="image/x-icon" /> --}}
    <title>Happy Pizza 🍕</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="">   
{{-- <nav class=" bg-gradient-to-b from-white to-zinc-900 border-gray-200 px-2 sm:px-4 py-1.5">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
      <a href="https://flowbite.com/" class="flex items-center">
          {{-- <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo"> --}}
          {{-- <img src="https://part.lt/img/f1f179e4c4cfee5953af021a0003e4b6456.png" height="70px" width="70px" style="display: block" /> --}}
          {{-- <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Happy Pizza</span> 
      </a>




      <button data-collapse-toggle="navbar-default" id="open" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        </button>


      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 bg-inherit">
          <li>
            <a href="#" class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">Home</a>
          </li>
          <li>
            <a href="#" class="block py-2 pr-4 pl-3 text-white md:p-0 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
          </li>
          <li>
            <a href="#" class="block py-2 pr-4 pl-3 text-white md:p-0 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
          </li>
          <li>
            <a href="#" class="block py-2 pr-4 pl-3 text-white md:p-0 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
          </li>
          <li>
            <a href="#" class="block py-2 pr-4 pl-3 text-white md:p-0 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
          </li>
        </ul>
      </div>



      
    </div>
  </nav> --}}

    <div class="container">
        <div class="flex w-screen p-0 mx-auto border-slate-900 justify-center">
            <img src="https://part.lt/img/f1f179e4c4cfee5953af021a0003e4b6456.png" class="w-40 pt-3" alt="">
        </div>
    
    @yield('content')
</body>
</html>