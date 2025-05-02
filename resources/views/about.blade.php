@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <!-- Back to Home Link -->
    <div class="mb-8">
        <a href="{{ route('home') }}" class="inline-flex items-center text-indigo-600 hover:text-indigo-700">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
            </svg>
            Back to Home
        </a>
    </div>

    <!-- Page Title -->
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-gray-900 mb-4">About StartupHub</h1>
    </div>

    <!-- Introductory Paragraph -->
    <div class="max-w-3xl mx-auto text-center mb-16">
        <p class="text-xl text-gray-600">
            StartupHub is an open marketplace for founders to list their startups, find investors or co-founders, and connect with like-minded innovators. Our mission is to support early-stage entrepreneurs by providing a platform for visibility and growth. We believe in collaboration, innovation, and a thriving startup ecosystem.
        </p>
    </div>

    <!-- Core Values Section -->
    <div class="mb-16">
        <h2 class="text-2xl font-bold text-center mb-8">Our Core Values</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <div class="text-4xl mb-4">🌱</div>
                <h3 class="text-xl font-semibold mb-2">Empowering Startups</h3>
                <p class="text-gray-600">We provide the tools and platform for startups to thrive and grow.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <div class="text-4xl mb-4">🤝</div>
                <h3 class="text-xl font-semibold mb-2">Building Connections</h3>
                <p class="text-gray-600">Creating meaningful relationships between founders, investors, and innovators.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <div class="text-4xl mb-4">🚀</div>
                <h3 class="text-xl font-semibold mb-2">Growth Focused</h3>
                <p class="text-gray-600">Supporting startups at every stage of their growth journey.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <div class="text-4xl mb-4">🌐</div>
                <h3 class="text-xl font-semibold mb-2">Open and Inclusive</h3>
                <p class="text-gray-600">Welcoming diverse perspectives and fostering an inclusive ecosystem.</p>
            </div>
        </div>
    </div>

    <!-- Statistics Section -->
    <div class="mb-16">
        <h2 class="text-2xl font-bold text-center mb-8">By the Numbers</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-indigo-600 text-white p-6 rounded-lg shadow-md text-center">
                <div class="text-4xl font-bold mb-2">50+</div>
                <p class="text-indigo-100">Startups Listed</p>
            </div>
            <div class="bg-indigo-600 text-white p-6 rounded-lg shadow-md text-center">
                <div class="text-4xl font-bold mb-2">10+</div>
                <p class="text-indigo-100">Startup Categories</p>
            </div>
            <div class="bg-indigo-600 text-white p-6 rounded-lg shadow-md text-center">
                <div class="text-4xl font-bold mb-2">20+</div>
                <p class="text-indigo-100">Investor Connections</p>
            </div>
            <div class="bg-indigo-600 text-white p-6 rounded-lg shadow-md text-center">
                <div class="text-4xl font-bold mb-2">2024</div>
                <p class="text-indigo-100">Live Since</p>
            </div>
        </div>
    </div>

    <!-- Bottom Back to Home Button -->
    <div class="text-center">
        <a href="{{ route('home') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
            </svg>
            Back to Home
        </a>
    </div>
</div>
@endsection 