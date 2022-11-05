@extends('layout.app')

@section('content')
        @for ($i = 0; $i < 15; $i++)
        <div class="relative inline-block max-w-md min-w-min p-3 z-0 hover:cursor-pointer" style="">
            {{-- TODO: 
                    - padaryti :hover kad scale 1.2 same size 
                    - padaryti on click kazka        
            --}}
            {{-- FIXME: https://w3bits.com/css-image-hover-zoom/ --}}
            {{--  --}}
            <img src="{{ asset("picos/1.jpg") }}" class="w-full brightness-50 hover:brightness-75 transition duration-300" alt=""> 
            <h2 class="absolute top-10 left-10 text-white font-extrabold font-mono text-2xl">Gaveria MONO</h2>
            {{-- <a href="#" class=" absolute font-sans no-underline border-3 border-red-700 bg-red-600 hover:bg-red-700 py-2 px-5 bottom-8 right-8 text-white rounded-lg active:bg-red-800">Išsamiau</a> --}}
        </div>
        
        @endfor
@endsection