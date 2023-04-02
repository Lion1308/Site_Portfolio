@extends('layouts.main')
@section('title', 'Web animation')
@section('content')
    <div class="container">
        <div class="row">
            <x-title-iframe class="img-for-iframe col-md-6 d-flex justify-content-center py-2" image="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/preview/1.webp') }}"></x-title-iframe>
            <x-title-iframe class="img-for-iframe col-md-6 d-flex justify-content-center py-2" image="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/preview/2.webp') }}"></x-title-iframe>
            <x-title-iframe class="img-for-iframe col-md-6 d-flex justify-content-center py-2" image="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/preview/3.webp') }}"></x-title-iframe>
            <x-title-iframe class="img-for-iframe col-md-6 d-flex justify-content-center py-2" image="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/preview/4.webp') }}"></x-title-iframe>
            <x-title-iframe class="img-for-iframe col-md-6 d-flex justify-content-center py-2" image="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/preview/7.webp') }}"></x-title-iframe>
            <x-title-iframe class="img-for-iframe col-md-6 d-flex justify-content-center py-2" image="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/preview/8.webp') }}"></x-title-iframe>
            <x-title-iframe class="img-for-iframe d-flex justify-content-center py-2" image="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/preview/9.webp') }}"></x-title-iframe>
            <x-title-iframe class="img-for-iframe d-flex justify-content-center py-2" image="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/preview/10.webp') }}"></x-title-iframe>
            <x-title-iframe class="img-for-iframe d-flex justify-content-center py-2" image="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/preview/11.webp') }}"></x-title-iframe>
            <x-title-iframe class="img-for-iframe d-flex justify-content-center py-2" image="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/preview/12.webp') }}"></x-title-iframe>
        </div>
    </div>
@endsection
