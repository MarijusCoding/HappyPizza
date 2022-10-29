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
<body>
    <div class="container flex justify-center border-6 mx-auto my-auto content-end bg-transparent">
        <div class="flex items-center">
            <a href="" class=" text-4xl underline px-6">MENIU</a>
        </div>
        <div class="flex items-center">
            <img src="https://part.lt/img/f1f179e4c4cfee5953af021a0003e4b6969.png" class="w-40 h-40" alt="">
            
        </div>
        <div class="flex items-center">
            <a href="" class=" text-4xl underline px-6">KONTAKTAI</a>
        </div>
    </div>
    @yield('content')
</body>
</html>