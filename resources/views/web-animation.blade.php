@extends('layouts.main')
@section('title', 'Web animation')
@section('content')
    <div class="container">
        <div class="row">
            <x-title-iframe class="img-for-iframe video-link col-md-6 d-flex justify-content-center py-2" url="https://www.youtube.com/watch?v=qPyArc7FxYU&list=PLRkdss2T5Y8i8fmD4gCSxDzOjJ7zfDwFm&index=11" image="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/preview/1.webp') }}"></x-title-iframe>
            <x-title-iframe class="img-for-iframe video-link col-md-6 d-flex justify-content-center py-2" url="https://www.youtube.com/watch?v=oFGfOX-NcJI&list=PLRkdss2T5Y8i8fmD4gCSxDzOjJ7zfDwFm&index=9" image="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/preview/2.webp') }}"></x-title-iframe>
            <x-title-iframe class="img-for-iframe video-link col-md-6 d-flex justify-content-center py-2" url="https://www.youtube.com/watch?v=oFGfOX-NcJI&list=PLRkdss2T5Y8i8fmD4gCSxDzOjJ7zfDwFm&index=9" image="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/preview/3.webp') }}"></x-title-iframe>
            <x-title-iframe class="img-for-iframe video-link col-md-6 d-flex justify-content-center py-2" url="https://www.youtube.com/watch?v=PRY7kYaZFWM&list=PLRkdss2T5Y8i8fmD4gCSxDzOjJ7zfDwFm&index=4&pp=iAQB" image="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/preview/4.webp') }}"></x-title-iframe>
            <x-title-iframe class="img-for-iframe video-link col-md-6 d-flex justify-content-center py-2" url="https://www.youtube.com/watch?v=P1LkPAwnfS8&list=PLRkdss2T5Y8i8fmD4gCSxDzOjJ7zfDwFm&index=14" image="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/preview/7.webp') }}"></x-title-iframe>
            <x-title-iframe class="img-for-iframe video-link col-md-6 d-flex justify-content-center py-2" url="https://www.youtube.com/watch?v=cUldgzLvl9k&list=PLRkdss2T5Y8i8fmD4gCSxDzOjJ7zfDwFm&index=8" image="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/preview/8.webp') }}"></x-title-iframe>
            <x-title-iframe class="img-for-iframe video-link d-flex justify-content-center py-2" url="https://www.youtube.com/watch?v=Q6QO9K-754Q&list=PLRkdss2T5Y8i8fmD4gCSxDzOjJ7zfDwFm&index=6" image="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/preview/9.webp') }}"></x-title-iframe>
            <x-title-iframe class="img-for-iframe video-link d-flex justify-content-center py-2" url="https://www.youtube.com/watch?v=UZUxJCnExCU&list=PLRkdss2T5Y8i8fmD4gCSxDzOjJ7zfDwFm&index=6&pp=iAQB" image="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/preview/10.webp') }}"></x-title-iframe>
            <x-title-iframe class="img-for-iframe video-link d-flex justify-content-center py-2" url="https://www.youtube.com/watch?v=4_gKVcUAFYs&list=PLRkdss2T5Y8i8fmD4gCSxDzOjJ7zfDwFm&index=2&pp=iAQB" image="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/preview/11.webp') }}"></x-title-iframe>
            <x-title-iframe class="img-for-iframe video-link d-flex justify-content-center py-2" url="https://www.youtube.com/watch?v=qFpt6-Y6lbg&list=PLRkdss2T5Y8i8fmD4gCSxDzOjJ7zfDwFm&index=12&pp=iAQB" image="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/preview/12.webp') }}"></x-title-iframe>
        </div>
    </div>
@endsection
