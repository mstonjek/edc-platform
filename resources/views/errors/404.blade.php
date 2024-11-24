@extends('components.layouts.app')

@section('title', __("titles.404_page"))

@section('content')
    <div class="container text-center">
        <h1 class="text-4xl font-bold text-red-600">{{ __('errors.page_not_found') }}</h1>
        <a href="{{ url('/') }}" class="mt-6 text-lg text-blue-600 underline">home</a>
    </div>
@endsection
