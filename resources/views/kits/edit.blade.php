@extends('components.layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-4">Upravit Kit</h1>
        <form method="POST" action="{{ route('kits.update', $kit->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
                <input type="text" id="name" name="name" value="{{ $kit->name }}" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-bold mb-2">Description:</label>
                <textarea id="description" name="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ $kit->description }}</textarea>
            </div>
            <div class="mb-4">
                <label for="is_public" class="block text-gray-700 font-bold mb-2">Public:</label>
                <input type="checkbox" id="is_public" name="is_public" value="1" {{ $kit->is_public ? 'checked' : '' }} class="mr-2 leading-tight">
                <span class="text-sm">Yes</span>
            </div>
            <div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Update Kit</button>
            </div>
        </form>
    </div>
@endsection
