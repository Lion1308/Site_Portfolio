@extends('layouts.main')
@section('title', 'Web animation')
@section('content')
    <div class="container">
        <div class="row">
            <x-title-iframe class="img-for-iframe video-link col-md-6 d-flex justify-content-center py-2" data-video="https://vimeo.com/722209782" image="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/preview/1.webp') }}"></x-title-iframe>
            <x-title-iframe class="img-for-iframe video-link col-md-6 d-flex justify-content-center py-2" data-video="https://vimeo.com/722209604" image="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/preview/2.webp') }}"></x-title-iframe>
            <x-title-iframe class="img-for-iframe video-link col-md-6 d-flex justify-content-center py-2" data-video="https://vimeo.com/722209314" image="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/preview/3.webp') }}"></x-title-iframe>
            <x-title-iframe class="img-for-iframe video-link col-md-6 d-flex justify-content-center py-2" data-video="https://vimeo.com/722208337" image="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/preview/4.webp') }}"></x-title-iframe>
            <x-title-iframe class="img-for-iframe video-link col-md-6 d-flex justify-content-center py-2" data-video="https://vimeo.com/722209400" image="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/preview/7.webp') }}"></x-title-iframe>
            <x-title-iframe class="img-for-iframe video-link col-md-6 d-flex justify-content-center py-2" data-video="https://vimeo.com/722209421" image="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/preview/8.webp') }}"></x-title-iframe>
            <x-title-iframe class="img-for-iframe video-link d-flex justify-content-center py-2" data-video="https://vimeo.com/722213500" image="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/preview/9.webp') }}"></x-title-iframe>
            <x-title-iframe class="img-for-iframe video-link d-flex justify-content-center py-2" data-video="https://vimeo.com/722208893" image="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/preview/10.webp') }}"></x-title-iframe>
            <x-title-iframe class="img-for-iframe video-link d-flex justify-content-center py-2" data-video="https://vimeo.com/722209050" image="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/preview/11.webp') }}"></x-title-iframe>
            <x-title-iframe class="img-for-iframe video-link d-flex justify-content-center py-2" data-video="https://vimeo.com/790407773" image="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/preview/12.webp') }}"></x-title-iframe>
        </div>
    </div>
@endsection
