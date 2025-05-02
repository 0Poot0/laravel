@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <!-- Category Header -->
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-gray-900 mb-4">{{ $category->name }}</h1>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">{{ $category->description }}</p>
    </div>

    <!-- Startups Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse($startups as $startup)
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        @if($startup->logo)
                            <img src="{{ $startup->logo }}" alt="{{ $startup->name }}" class="w-16 h-16 object-contain">
                        @endif
                        <div class="ml-4">
                            <h3 class="text-xl font-semibold text-gray-900">{{ $startup->name }}</h3>
                            <p class="text-indigo-600">{{ $startup->funding_stage }}</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">{{ Str::limit($startup->description, 150) }}</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500">Trending Score: {{ $startup->trending_score }}</span>
                        <a href="/startups/{{ $startup->id }}" class="text-indigo-600 hover:text-indigo-700 font-semibold">View Details →</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-span-full text-center py-12">
                <h3 class="text-xl font-semibold text-gray-900 mb-2">No Startups Found</h3>
                <p class="text-gray-600">There are currently no startups in this category.</p>
            </div>
        @endforelse
    </div>

    <!-- Pagination -->
    <div class="mt-12">
        {{ $startups->links() }}
    </div>
</div>
@endsection 