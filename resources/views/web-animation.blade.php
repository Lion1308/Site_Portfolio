@extends('layouts.main')
@section('title', 'Web animation')
@section('content')
    <div class="container">
        <div class="row">
            <x-title-iframe class="col-md-4" image="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/elements/element1.png') }}"></x-title-iframe>
            <x-title-iframe class="col-md-4" image="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/elements/element1.png') }}"></x-title-iframe>
            <x-title-iframe class="col-md-4" image="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/elements/element1.png') }}"></x-title-iframe>

            <x-title-iframe class="col-md-6" image="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/elements/element1.png') }}"></x-title-iframe>
            <x-title-iframe class="col-md-6" image="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/elements/element1.png') }}"></x-title-iframe>
        </div>
    </div>
@endsection
