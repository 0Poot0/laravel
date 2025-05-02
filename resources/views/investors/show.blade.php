@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <div class="relative">
            <div class="aspect-w-16 aspect-h-9">
                <img src="{{ $investor->profile_picture }}" alt="{{ $investor->name }}" class="w-full h-96 object-cover">
            </div>
            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-8">
                <h1 class="text-4xl font-bold text-white">{{ $investor->name }}</h1>
                <div class="mt-4">
                    <span class="inline-block bg-indigo-100 text-indigo-800 text-sm font-semibold px-3 py-1 rounded-full">
                        {{ $investor->funding_range }}
                    </span>
                </div>
            </div>
        </div>

        <div class="p-8">
            <div class="prose max-w-none">
                <h2 class="text-2xl font-semibold text-gray-900 mb-4">About</h2>
                <p class="text-gray-600">{{ $investor->bio }}</p>
            </div>

            <div class="mt-12">
                <h2 class="text-2xl font-semibold text-gray-900 mb-4">Investment Focus</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Funding Range</h3>
                        <p class="text-gray-600">{{ $investor->funding_range }}</p>
                    </div>
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Investment Stage</h3>
                        <p class="text-gray-600">Early to Growth Stage</p>
                    </div>
                </div>
            </div>

            <div class="mt-12">
                <a href="{{ route('investors.index') }}" class="inline-flex items-center text-indigo-600 hover:text-indigo-700">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Back to Investors
                </a>
            </div>
        </div>
    </div>
</div>
@endsection 