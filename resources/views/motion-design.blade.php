@extends('layouts.main')
@section('title', 'Motion design')
@section('content')
    <div class="gif d-flex container justify-content-center align-items-center">
        <div class="gif-container d-flex row w-50">
            <img class="p-3" src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/gifts.gif') }}" alt="">
            <img class="p-3" src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/icons.gif') }}" alt="">
            <img class="p-3" src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/openCake.gif') }}" alt="">
            <img class="p-3" src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/plateOfBorshch.gif') }}" alt="">
        </div>
        <div class="gif-container-bg container">
            <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/elements/element1.png') }}" alt="">
            <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/elements/element2.png') }}" alt="">
            <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/elements/element3.png') }}" alt="">
            <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/elements/element4.png') }}" alt="">
            <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/elements/element5.png') }}" alt="">
            <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/elements/element6.png') }}" alt="">
        </div>
    </div>
@endsection
