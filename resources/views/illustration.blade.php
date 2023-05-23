@extends('layouts.main')
@section('title', 'Illustration')
@section('content')
    <div class="container">
        <div class="accordion accordion-flush" id="accordionFlushExample">

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed flex-column" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        <img class="col-12 w-50"
                            src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/illustration/travel_icon/travelPack.webp') }}"
                            alt="">
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                     data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body row justify-content-center">

                        <div class="row">
                            <img class="col-6"
                                src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/illustration/travel_icon/travel4.webp') }}"
                                alt="">
                            <img class="col-6"
                                src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/illustration/travel_icon/travel2.webp') }}"
                                alt="">
                            <img class="col-6"
                                src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/illustration/travel_icon/travel3.webp') }}"
                                alt="">
                            <img class="col-6"
                                src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/illustration/travel_icon/travel1.webp') }}"
                                alt="">
                        </div>

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed flex-column" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        <img class="col-12 w-50"
                            src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/illustration/life_at_home/lifeAtHome.webp') }}"
                            alt="">
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                     data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body row justify-content-center">
                        <div>
                            <h2 class="pb-4">
                                Life at home
                            </h2>
                            <p>
                                Set of illustrations for the website on the theme of life at home.
                            <p>
                                After the covid19 pandemic began, people had to spend a lot of time at home.
                            </p>
                            <p>
                                This set is to illustrate options for spending time at home.
                            </p>
                            </p>
                            <h4 class="pt-4">
                                Color palette
                            </h4>
                        </div>

                        <div class="row">
                            <img class="col-12"
                                 src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/illustration/life_at_home/color.webp') }}"
                                 alt="">
                            <img class="col-6"
                                src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/illustration/life_at_home/lah1.webp') }}"
                                alt="">
                            <img class="col-6"
                                src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/illustration/life_at_home/lah2.webp') }}"
                                alt="">
                            <img class="col-6"
                                src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/illustration/life_at_home/lah3.webp') }}"
                                alt="">
                            <img class="col-6"
                                src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/illustration/life_at_home/lah4.webp') }}"
                                alt="">
                            <img class="col-6"
                                src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/illustration/life_at_home/lah5.webp') }}"
                                alt="">
                            <img class="col-6"
                                src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/illustration/life_at_home/lah6.webp') }}"
                                alt="">
                            <img class="col-6"
                                src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/illustration/life_at_home/lah7.webp') }}"
                                alt="">
                            <img class="col-6"
                                src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/illustration/life_at_home/lah8.webp') }}"
                                alt="">
                        </div>

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed flex-column" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                            aria-controls="flush-collapseThree">
                        <img class="col-12 w-50"
                            src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/illustration/kiki/kiki.webp') }}"
                            alt="">
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                     data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body d-flex flex-column align-items-center">

                        <div class="row">
                            <img class="py-2 w-50"
                                 src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/illustration/kiki/kiki2.webp') }}"
                                 alt="">
                            <img class="py-2 w-50"
                                 src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/illustration/kiki/kiki3.webp') }}"
                                 alt="">
                            <img class="py-2 w-50"
                                 src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/illustration/kiki/kiki4.webp') }}"
                                 alt="">
                            <img class="py-2 w-50"
                                 src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/illustration/kiki/kiki5.webp') }}"
                                 alt="">
                            <img class="py-2 w-50"
                                 src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/illustration/kiki/kiki6.webp') }}"
                                 alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
