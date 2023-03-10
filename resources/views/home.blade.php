@extends('layouts.main')
@section('title', 'Головна')
@section('content')
    <h1 class="bg-primary p-2">
        Головна
    </h1>
    <a href="{{ route('about') }}">Про мене</a>
@endsection
