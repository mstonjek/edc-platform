<!-- resources/views/errors/500.blade.php -->

@extends('components.layouts.app')

@section('title', __("titles.500_page"))

@section('content')
    <div class="container text-center">
        <h1 class="text-4xl font-bold text-red-600">{{ __('errors.page_server_error') }}</h1>
        <p class="mt-4 text-xl">{{ __('errors.service_unavailable') }}</p>
        <a href="{{ url('/') }}" class="mt-6 text-lg text-blue-600 underline">Zpět na domovskou stránku</a>
    </div>
@endsection
