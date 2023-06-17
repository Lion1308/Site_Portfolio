@extends('layouts.main')
@section('title', 'Motion design')
@section('content')

    <div class="container">
        <div class="accordion accordion-flush" id="accordionFlushExample">

            <div class="accordion-item">
                <div class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed flex-column" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/gifts.gif') }}"
                             alt="">
                    </button>
                </div>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                     data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body d-flex flex-column align-items-center">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <img class="feature-item-image"
                                 src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/gifts/1.png') }}"
                                 alt="">

                            <div class="text-wrap">
                                <p class="motion-design__description">
                                    Explainer video about the order and delivery
                                    of products from the online cake shop.
                                </p>
                                <p class="motion-design__description">
                                    The project concerns a cake shop that has created its own
                                    website<br>
                                    and wants to show customers
                                    how they can order online and receive delivery.
                                </p>
                            </div>

                            <div class="d-flex justify-content-center my-5">
                                <iframe loading="lazy" class="responsive-iframe"
                                        src="https://www.youtube.com/embed/vkM5Ui4c7lY"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen>
                                </iframe>
                            </div>


                            <div class="d-flex my-5">
                                <div class="d-flex flex-column align-items-center gap-2">
                                    <h3>Storyboard</h3>
                                    <img class="w-100"
                                         src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/gifts/sketch2frame.png') }}"
                                         alt="">
                                    <img class="w-100"
                                         src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/gifts/sketch7frame.png') }}"
                                         alt="">
                                    <img class="w-100"
                                         src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/gifts/sketch10frame.png') }}"
                                         alt="">
                                    <img class="w-100"
                                         src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/gifts/sketch15frame.png') }}"
                                         alt="">
                                </div>
                                <div class="d-flex flex-column align-items-center gap-2">
                                    <h3>Style Frame</h3>
                                    <img class="w-100"
                                         src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/gifts/2frame.png') }}"
                                         alt="">
                                    <img class="w-100"
                                         src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/gifts/7frame.png') }}"
                                         alt="">
                                    <img class="w-100"
                                         src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/gifts/10frame.png') }}"
                                         alt="">
                                    <img class="w-100"
                                         src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/gifts/15frame.png') }}"
                                         alt="">
                                </div>
                            </div>

                        </div>

                        <h3 class="text-center p-5">
                            Character Design
                        </h3>
                        <img class="p-2 col-12"
                             src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/gifts/characters.png') }}"
                             alt="">
                        <h3 class="p-5">
                            Motion
                        </h3>

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
                <div class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed flex-column" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        <img
                             src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/icons.gif') }}"
                             alt="">
                    </button>
                </div>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                     data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body row justify-content-center">

                        <div class="d-flex justify-content-center">
                            <h3 class="text-center p-5">
                                Kinetic Typography
                            </h3>
                        </div>

                        <div class="d-flex justify-content-center">
                            <iframe loading="lazy" class="responsive-iframe"
                                    src="https://www.youtube.com/embed/-QxCKT9sMU4"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen>
                            </iframe>
                        </div>

                        <div class="d-flex justify-content-center">
                            <h3 class="p-5">
                                Color palette
                            </h3>
                        </div>

{{--                        <img class="feature-item-image"--}}
{{--                             src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/kineticTypography/color1.png') }}"--}}
{{--                             alt="">--}}

                        <x-pallet :colors="['#b5452f', '#e1b840', '#f9f4f0', '#254535', '#a0aa92']" />

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
                <div class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed flex-column" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                            aria-controls="flush-collapseThree">
                        <img
                             src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/openCake.gif') }}"
                             alt="">
                    </button>
                </div>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                     data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body d-flex flex-column align-items-center">

                        <div class="d-flex justify-content-center">
                            <iframe loading="lazy" class="responsive-iframe"
                                    src="https://www.youtube.com/embed/39rUP1VpaUw"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen>
                            </iframe>
                        </div>

                        <p class="text-wrap text-center p-5 motion-design__description">
                            Character and animation development
                            for the presentation of a new product
                            on social networks.
                        </p>

                        <h3 class="p-5">
                            Color palette
                        </h3>

{{--                        <img class="feature-item-image"--}}
{{--                             src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/openCake/colorpalette.png') }}"--}}
{{--                             alt="">--}}

                        <x-pallet :colors="['#ffd82c', '#ff9d00', '#00c8b5', '#ff698f', '#65475b']" />

                        <h3 class="p-5">
                            Character Design
                        </h3>

                        <img class="col-12"
                             src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/openCake/cookCharactersketch.png') }}"
                             alt="">
                        <img class="col-12"
                             src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/openCake/cookCharacterskeleton.png') }}"
                             alt="">
                        <img class="col-12"
                             src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/openCake/cookCharactercolor.png') }}"
                             alt="">

                        <h3 class="p-5">
                            Motion
                        </h3>

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
                <div class="accordion-header" id="flush-headingFour">
                    <button class="accordion-button collapsed flex-column" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFour" aria-expanded="false"
                            aria-controls="flush-collapseFour">
                        <img
                             src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/plateOfBorshch.gif') }}"
                             alt="">
                    </button>
                </div>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                     data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body d-flex flex-column align-items-center">
                        <img class="feature-item-image"
                             src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/borshch/1.png') }}"
                             alt="">

                        <p class="text-center motion-design__description">
                            Delicious food from Ukraine
                        </p>
                        <h2 class="text-center">
                            Borsch
                        </h2>
                        <p class="text-wrap text-center motion-design__description">
                            Explanatory video about traditional Ukrainian dish Borsch,
                            about its ingredients, how it is prepared
                            and which countries to is eaten.
                        </p>

                        <div class="d-flex justify-content-center">
                            <iframe loading="lazy" class="responsive-iframe"
                                    src="https://www.youtube.com/embed/92y0aEnVRII"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen>
                            </iframe>
                        </div>

                        <div class="d-flex my-5">
                            <div class="d-flex flex-column align-items-center gap-2">
                                <h3>Storyboard</h3>
                                <img class="w-100"
                                     src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/borshch/2b.png') }}"
                                     alt="">
                                <img class="w-100"
                                     src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/borshch/4b.png') }}"
                                     alt="">
                                <img class="w-100"
                                     src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/borshch/6b.png') }}"
                                     alt="">
                            </div>
                            <div class="d-flex flex-column align-items-center gap-2">
                                <h3>Style Frame</h3>
                                <img class="w-100"
                                     src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/borshch/2.png') }}"
                                     alt="">
                                <img class="w-100"
                                     src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/borshch/4.png') }}"
                                     alt="">
                                <img class="w-100"
                                     src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/gifs/motionDesign/borshch/6.png') }}"
                                     alt="">
                            </div>
                        </div>

                        <h3 class="p-5">
                            Motion
                        </h3>

                        <div class="d-flex row align-items-center justify-content-center">
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
