@extends('layouts.main')
@section('title', 'About me')
@section('content')
    {{--    Start Skills--}}
    <div class="container row mx-auto">
        <div class="col-md-4 col-sm-12">
            <p class="skills_MP">My Skills:</p>
            <ul class="list-unstyled">
                <li>Explainer video</li>
                <li>2d Character animation</li>
                <li>Promo video</li>
                <li>Animation for social media</li>
                <li>GIF for web site</li>
                <li>Infographics</li>
                <li>Kinetic typography</li>
                <li>Logo animation</li>
                <li>Intro (outro)</li>
                <li>Interactive books for
                    children
                </li>
                <li>Video editing</li>
                <li>Titles</li>
                <li>Sound design</li>
                <li>Storyboard</li>
                <li>Styleframes</li>
                <li>Character design</li>
                <li>Illustrations for web site</li>
                <li>Vector illustrations</li>
            </ul>
        </div>
        <div class="col-md-4 col-sm-12">
            <p class="light"> </p>
            <ul class="list-unstyled">
                <li>Editing of all types of footage</li>
                <li>Adding signatures, graphics, developing intros and endings, etc.</li>
                <li>Subtitles</li>
                <li>Video to audio transitions</li>
                <li>Promotional video of services</li>
                <li>Promo video of a popular product</li>
                <li>Site presentation</li>
                <li>Promo video for the event</li>
                <li>Synchronization of audio and video</li>
                <li>Create a slideshow from photos</li>
                <li>Color correction</li>
                <li>Vacation video</li>
            </ul>
        </div>
        <div class="col-md-4 col-sm-12">
            <p class="skills_MP">Tools I use:</p>
            <ul class="list-unstyled">
                <li>Adobe After Effects</li>
                <li>Adobe Illustrator</li>
                <li>Adobe Photoshop</li>
                <li>Adobe Premiere Pro</li>
            </ul>
        </div>
    </div>
    {{--    End Skills--}}

    {{--    Start Swiper--}}
    <div class="swiper container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/feedback1.png') }}">
            </div>
            <div class="swiper-slide">
                <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/feedback2.png') }}">
            </div>
            <div class="swiper-slide">
                <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/feedback3.png') }}">
            </div>
            <div class="swiper-slide">
                <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/feedback/feedback4.png') }}">
            </div>
            <div class="swiper-slide">
                <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/feedback/feedback5.png') }}">
            </div>
        </div>
        <div class="swiper-pagination"></div>

        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <div class="swiper-scrollbar"></div>
    </div>
    {{--    End Swiper--}}
@endsection
