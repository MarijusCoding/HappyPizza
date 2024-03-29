<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Happy Pizza</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="m-0 p-0">
    <div class="fixed top-0 w-full z-10 inline-flex bg-gradient-to-b border-0 from-red-600  m-0 sm:justify-evenly sm:pt-0 pt-1 sm:pl-0 pl-5 items-center" id="navas">
      {{-- <div class="inline-block"> --}}
        <a href="#" class="text-2xl font-light no-underline text-white font-sans transition-all duration-150 hover:pb-2 hidden sm:flex">MENIU</a>
        <a href="#" class="text-2xl font-light no-underline text-white font-sans transition-all duration-150 hover:pb-2 hidden sm:flex">UŽSISAKYK</a>
      {{-- </div> --}}
      <div class=" sm:items-center items-start">
        <a href="#"><img src="https://part.lt/img/f1f179e4c4cfee5953af021a0003e4b6965.png" class="sm:w-32 w-24"/></a>
      </div>
      {{-- <div class="inline-block"> --}}
        <a href="#" class="text-2xl font-light no-underline text-white font-sans transition-all duration-150 hover:pb-2 hidden sm:flex">KONTAKTAI</a>
        <a href="#" class="text-2xl font-light no-underline text-white font-sans transition-all duration-150 hover:pb-2 hidden sm:flex">APIE</a>
      {{-- </div> --}}
      {{-- MOBILE VERSION --}}
      <div class="sm:hidden visible w-full px-5 float-right">
        <input type="image" src="{{ asset('toggle_icon.png') }}" id="toggle" class="sm:hidden block float-right">
      </div>
    </div>


    {{-- OLD NAV MOBILE --}}
    {{-- <div class="fixed text-center items-center justify-center mx-auto w-full bg-white" style="display: none; z-index: 40; top: 4.9rem;" >
      <ul class="list-none py-2">
        <li><a href="#" class="text-2xl text-black font-sans no-underline" id="hambur">MENIU</a></li><br><hr class="w-24"><br>
        <li><a href="#" class="text-2xl text-black font-sans no-underline" id="hambur">UŽSISAKYK</a></li><br><hr class="w-24"><br>
        <li><a href="#" class="text-2xl text-black font-sans no-underline" id="hambur">KONTAKTAI</a></li><br><hr class="w-24"><br>
        <li><a href="#" class="text-2xl text-black font-sans no-underline" id="hambur">APIE</a></li>
      </ul>
    </div> --}}


    <div class="fixed top-2 justify-around w-full" style="display: none; z-index: 40; top: 5.5rem" id="teks">
      <a href="#" class="bg-red-700 px-4 rounded-full bg-gradient-to-br from-red-700 to-red-300 border-black border">
        <img src="{{ asset("icons/home.png") }}" alt="">
      </a>
      <a href="#" class="bg-red-700 px-4 rounded-full bg-gradient-to-br from-red-700 to-red-300 border-black border">
        <img src="{{ asset("icons/order.png") }}" alt="">
      </a>
      <a href="#" class="bg-red-700 px-4 rounded-full bg-gradient-to-br from-red-700 to-red-300 border-black border">
        <img src="{{ asset("icons/contacts.png") }}" alt="">
      </a>
      <a href="#" class="bg-red-700 px-4 rounded-full bg-gradient-to-br from-red-700 to-red-300 border-black border">
        <img src="{{ asset("icons/about.png") }}" alt="">
      </a>
    </div>

    <div class="flex flex-wrap justify-around sm:pt-32 pt-20">
      @yield('content')
    </div>
</body>
</html>