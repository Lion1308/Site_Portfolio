@extends('layouts.main')
@section('title', 'About me')
@section('content')

    <div class="hero py-5">
        <div class="hero-container d-flex flex-column flex-md-row container align-items-center">
            <div class="hero-title py-4 col-md-5">
                <h1>Myroslava Prokopiuk</h1>
                <h3>Graphic and Motion designer</h3>
            </div>
            <div class="hero-photo d-flex flex-grow-1 justify-content-center col-md-7">
                <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/photo.webp') }}" alt="Myroslava Prokopiuk">
            </div>
        </div>
        <div class="hero-bg container">
            <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/elements/element1.png') }}" alt="">
            <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/elements/element2.png') }}" alt="">
            <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/elements/element3.png') }}" alt="">
            <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/elements/element4.png') }}" alt="">
            <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/elements/element5.png') }}" alt="">
            <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/elements/element6.png') }}" alt="">
        </div>
    </div>


    {{--    Start Skills--}}
    <div class="skills py-5">
        <div class="skills-container container row mx-auto m-5">
                <div class="skills-title container my-5">
                <h1>Graduate Lisbon School of Design</h1>
                <h4>Course Motion design</h4>
            </div>
            <div class="d-flex flex-column flex-lg-row justify-content-evenly">
                <div class="">
                    <p class="">My Skills:</p>
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
                <div style="flex-basis: 25%;">
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
                <div class="">
                    <p class="skills_MP">Tools I use:</p>
                    <ul class="list-unstyled">
                        <li>Adobe After Effects</li>
                        <li>Adobe Illustrator</li>
                        <li>Adobe Photoshop</li>
                        <li>Adobe Premiere Pro</li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="skills-bg container">
            <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/elements/element8.png') }}" alt="">
            <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/elements/element3.png') }}" alt="">
            <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/elements/element9.png') }}" alt="">
            <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/elements/element10.png') }}" alt="">
            <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/elements/element7.png') }}" alt="">
        </div>
    </div>
    {{--    End Skills--}}
    {{--    Start Swiper--}}
    <div class="testimonials py-5">
        <div class="testimonials-title container py-5">
            <h1>
                Testimonials
            </h1>
            <hr>
            <h5>
                I`m always happy to receive positive feedback from my great clients.
            </h5>
            <h5>
                Here is a couple of the latest testimonials.
            </h5>
        </div>
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

{{--            <div class="swiper-button-prev"></div>--}}
{{--            <div class="swiper-button-next"></div>--}}

            <div class="swiper-scrollbar"></div>
        </div>
        <div class="testimonials-bg container">
            <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/elements/element5.png') }}" alt="">
            <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/elements/element4.png') }}" alt="">
        </div>
    </div>


    {{--    End Swiper--}}
@endsection
