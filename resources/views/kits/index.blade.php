@extends('components.layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-4">EDC Kits</h1>
        <a href="{{ route('kits.create') }}" class="inline-block mb-4 px-4 py-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600">Vytvořit nový Kit</a>
        <ul class="space-y-4">
            @foreach($kits as $kit)
                <li class="bg-white shadow-md rounded-lg p-4">
                    <div class="text-lg font-semibold">{{ $kit->name }}</div>
                    <div class="text-gray-700">{{ $kit->description }}</div>
                    <div class="text-gray-500">{{ $kit->is_public ? 'Public' : 'Private' }}</div>
                    <div class="text-gray-500 text-sm">{{ $kit->created_at }}</div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
