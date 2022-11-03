@extends('layout.app')

@section('content')
        @for ($i = 0; $i < 15; $i++)
        <div class="relative inline-block max-w-md min-w-min p-3" style="">
            <img src="{{ asset("picos/1.jpg") }}" class="w-full brightness-50 hover:brightness-75 transition-all duration-300" style="filter: brightness(50%)" alt="">
            <h2>Titleas</h2>
            <a href="#" class=" absolute font-sans no-underline border-3 border-red-700 bg-red-600 hover:bg-red-700 py-3 px-5 bottom-6 right-6 text-white rounded-full actove:bg-red-800">Išsamiau</a>
        </div>
        @endfor
        
@endsection