@extends('layouts.main')
@section('title', 'Motion design')
@section('content')
    {{--    <div class="gif d-flex container justify-content-center align-items-center">--}}
    {{--        <div class="gif-container d-flex row w-50">--}}
    {{--            <img class="p-3" src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/gifts.gif') }}" alt="">--}}
    {{--            <img class="p-3" src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/icons.gif') }}" alt="">--}}
    {{--            <img class="p-3" src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/openCake.gif') }}" alt="">--}}
    {{--            <img class="p-3" src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/plateOfBorshch.gif') }}" alt="">--}}
    {{--        </div>--}}
    {{--        <div class="gif-container-bg container">--}}
    {{--            <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/elements/element1.png') }}" alt="">--}}
    {{--            <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/elements/element2.png') }}" alt="">--}}
    {{--            <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/elements/element3.png') }}" alt="">--}}
    {{--            <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/elements/element4.png') }}" alt="">--}}
    {{--            <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/elements/element5.png') }}" alt="">--}}
    {{--            <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/elements/element6.png') }}" alt="">--}}
    {{--        </div>--}}
    {{--    </div>--}}

    <div class="container">
        <div class="accordion accordion-flush" id="accordionFlushExample">

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed flex-column" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        <img class="container w-50"
                             src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/gifts.gif') }}"
                             alt="">
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                     data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body d-flex flex-column align-items-center">
                        <div class="d-flex row align-items-center justify-content-between">

                            <div class="container">
                                <img class="container"
                                     src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/gifts/1.png') }}"
                                     alt="">
                            </div>

                            <div class="col-12">
                                <p>
                                    Explainer video about the order and delivery
                                    of products from the online cake shop.
                                </p>
                                <p>The project concerns a cake shop that has created its own
                                    website and wants to show customers
                                    how they can order online and receive delivery.
                                </p>
                            </div>

                            <div class="d-flex justify-content-center">
                                <iframe loading="lazy" width="560" height="315"
                                        src="https://www.youtube.com/embed/vkM5Ui4c7lY"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen>
                                </iframe>
                            </div>


                            <div class="d-flex justify-content-around">
                                <h1 class="nav-item p-5">
                                    Storyboard
                                </h1>
                                <h1 class="nav-item p-5">
                                    Style Frame
                                </h1>
                            </div>

                            <div class="d-flex row">
                                <img class="p-2 col-6"
                                     src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/gifts/sketch2frame.png') }}"
                                     alt="">
                                <img class="p-2 col-6"
                                     src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/gifts/2frame.png') }}"
                                     alt="">
                                <img class="p-2 col-6"
                                     src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/gifts/sketch7frame.png') }}"
                                     alt="">
                                <img class="p-2 col-6"
                                     src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/gifts/7frame.png') }}"
                                     alt="">
                                <img class="p-2 col-6"
                                     src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/gifts/sketch10frame.png') }}"
                                     alt="">
                                <img class="p-2 col-6"
                                     src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/gifts/10frame.png') }}"
                                     alt="">
                                <img class="p-2 col-6"
                                     src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/gifts/sketch15frame.png') }}"
                                     alt="">
                                <img class="p-2 col-6"
                                     src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/gifts/15frame.png') }}"
                                     alt="">
                            </div>

                        </div>

                        <h1 class="nav-item p-5">
                            Character Design
                        </h1>
                        <img class="p-2 col-12"
                             src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/gifts/characters.png') }}"
                             alt="">
                        <h1 class="nav-item p-5">
                            Motion
                        </h1>

                        <div class="row">
                            <img class="col-4 py-2"
                                 src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/gifts/Comp-2.gif') }}"
                                 alt="">
                            <img class="col-4 py-2"
                                 src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/gifts/Comp-4.gif') }}"
                                 alt="">
                            <img class="col-4 py-2"
                                 src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/gifts/Comp-5.gif') }}"
                                 alt="">
                            <img class="col-6 py-2"
                                 src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/gifts/Comp-3.gif') }}"
                                 alt="">
                            <img class="col-6 py-2"
                                 src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/gifts/Comp-6.gif') }}"
                                 alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed flex-column" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        <img class="container w-50"
                             src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/icons.gif') }}"
                             alt="">
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                     data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body row justify-content-center">

                        <div class="d-flex justify-content-center">
                            <h1 class="nav-item p-5">
                                Kinetic Typography
                            </h1>
                        </div>

                        <div class="d-flex justify-content-center">
                            <iframe loading="lazy" width="560" height="315"
                                    src="https://www.youtube.com/embed/-QxCKT9sMU4"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen>
                            </iframe>
                        </div>

                        <div class="d-flex justify-content-center">
                            <h1 class="nav-item p-5">
                                Color palette
                            </h1>
                        </div>

                        <img class="col-12"
                             src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/kineticTypography/color.png') }}"
                             alt="">

                        <div class="row">
                            <img class="col-6 py-2"
                                 src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/kineticTypography/artboard2.png') }}"
                                 alt="">
                            <img class="col-6 py-2"
                                 src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/kineticTypography/artboard3.png') }}"
                                 alt="">
                            <img class="col-6 py-2"
                                 src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/kineticTypography/artboard4.png') }}"
                                 alt="">
                            <img class="col-6 py-2"
                                 src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/kineticTypography/artboard5.png') }}"
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
                        <img class="container w-50"
                             src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/openCake.gif') }}"
                             alt="">
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                     data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body d-flex flex-column align-items-center">

                        <div class="d-flex justify-content-center">
                            <iframe loading="lazy" width="560" height="315"
                                    src="https://www.youtube.com/embed/39rUP1VpaUw"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen>
                            </iframe>
                        </div>

                        <p class="nav-item p-5">
                            Character and animation development<br>
                            for the presentation of a new product<br>
                            on social networks.
                        </p>

                        <h1 class="nav-item p-5">
                            Color palette
                        </h1>

                        <img class="col-12"
                             src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/openCake/colorpalette.png') }}"
                             alt="">

                        <h1 class="nav-item p-5">
                            Character Design
                        </h1>

                        <img class="col-12"
                             src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/openCake/cookCharactersketch.png') }}"
                             alt="">
                        <img class="col-12"
                             src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/openCake/cookCharacterskeleton.png') }}"
                             alt="">
                        <img class="col-12"
                             src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/openCake/cookCharactercolor.png') }}"
                             alt="">

                        <h1 class="nav-item p-5">
                            Motion
                        </h1>

                        <div class="row">
                            <img class="col-6"
                                 src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/openCake/legs.gif') }}"
                                 alt="">
                            <img class="col-6"
                                 src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/openCake/opencake.gif') }}"
                                 alt="">
                        </div>

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour">
                    <button class="accordion-button collapsed flex-column" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFour" aria-expanded="false"
                            aria-controls="flush-collapseFour">
                        <img class="container w-50"
                             src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/plateOfBorshch.gif') }}"
                             alt="">
                    </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                     data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body d-flex flex-column align-items-center">
                        <img class="w-75"
                             src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/borshch/1.png') }}"
                             alt="">

                        <p class="nav-item">
                            Delicious food from Ukraine
                        </p>
                        <h1 class="">
                            Borsch
                        </h1>
                        <p class="nav-item">
                            Explanatory video about traditional Ukrainian dish Borsch,<br>
                            about its ingredients, how it is prepared<br>
                            and which countries to is eaten.
                        </p>

                        <div class="d-flex justify-content-center">
                            <iframe loading="lazy" width="560" height="315" src="https://www.youtube.com/embed/92y0aEnVRII"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen>
                            </iframe>
                        </div>


                        <div class="d-flex row">

                            <div class="d-flex justify-content-around">
                                <h1 class="nav-item p-5">
                                    Storyboard
                                </h1>
                                <h1 class="nav-item p-5">
                                    Style Frame
                                </h1>
                            </div>

                            <img class="col-6 py-2"
                                 src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/borshch/2b.png') }}"
                                 alt="">
                            <img class="col-6 py-2"
                                 src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/borshch/2.png') }}"
                                 alt="">
                            <img class="col-6 py-2"
                                 src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/borshch/4b.png') }}"
                                 alt="">
                            <img class="col-6 py-2"
                                 src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/borshch/4.png') }}"
                                 alt="">
                            <img class="col-6 py-2"
                                 src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/borshch/6b.png') }}"
                                 alt="">
                            <img class="col-6 py-2"
                                 src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/borshch/6.png') }}"
                                 alt="">
                        </div>


                        <h1 class="nav-item p-5">
                            Motion
                        </h1>

                        <div class="d-flex row justify-content-center">
                            <img class="col-6 py-2"
                                 src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/borshch/ingredients.gif') }}"
                                 alt="">
                            <img class="col-6 py-2"
                                 src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/borshch/plate.gif') }}"
                                 alt="">
                            <img class="col-6 py-2"
                                 src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/borshch/cut-salo.gif') }}"
                                 alt="">
                            <img class="col-6 py-2"
                                 src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/borshch/salo.gif') }}"
                                 alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
