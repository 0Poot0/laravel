@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-gray-900 mb-4">Our Investors</h1>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">Connect with experienced investors who are passionate about supporting innovative startups.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse($investors as $investor)
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                <div class="aspect-w-16 aspect-h-9">
                    <img src="{{ $investor->profile_picture }}" alt="{{ $investor->name }}" class="w-full h-64 object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $investor->name }}</h3>
                    <div class="mb-4">
                        <span class="inline-block bg-indigo-100 text-indigo-800 text-sm font-semibold px-3 py-1 rounded-full">
                            {{ $investor->funding_range }}
                        </span>
                    </div>
                    <p class="text-gray-600 mb-4">{{ Str::limit($investor->bio, 150) }}</p>
                    <a href="{{ route('investors.show', $investor->id) }}" class="text-indigo-600 hover:text-indigo-700 font-semibold">View Profile →</a>
                </div>
            </div>
        @empty
            <div class="col-span-full text-center py-12">
                <h3 class="text-xl font-semibold text-gray-900 mb-2">No Investors Found</h3>
                <p class="text-gray-600">There are currently no investors available.</p>
            </div>
        @endforelse
    </div>

    <div class="mt-12">
        {{ $investors->links() }}
    </div>
</div>
@endsection 