@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-indigo-500 to-purple-600 text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold mb-6">Powering the Future of Innovation</h1>
                <p class="text-xl sm:text-2xl mb-8 max-w-3xl mx-auto">Discover startups, connect with investors, and build your dream team — all in one place.</p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="{{ route('startups.create') }}" class="bg-white text-indigo-600 px-8 py-3 rounded-md font-semibold hover:bg-indigo-50 transition duration-300">List Your Startup</a>
                    <a href="{{ route('startups.index') }}" class="bg-transparent border-2 border-white text-white px-8 py-3 rounded-md font-semibold hover:bg-white hover:text-indigo-600 transition duration-300">Browse Startups</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Browse by Category Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-12">Browse by Category</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($categories as $category)
                    <a href="/browse?category={{ $category->id }}" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                        <h3 class="text-xl font-semibold text-gray-900">{{ $category->name }}</h3>
                        <p class="text-gray-600 mt-2">{{ $category->description }}</p>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Featured Investors Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Featured Investors</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Connect with experienced investors who are passionate about supporting innovative startups.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($featuredInvestors as $investor)
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
                            <p class="text-gray-600 mb-4">{{ Str::limit($investor->bio, 100) }}</p>
                            <a href="{{ route('investors.show', $investor->id) }}" class="text-indigo-600 hover:text-indigo-700 font-semibold">View Profile →</a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('investors.index') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                    View All Investors
                </a>
            </div>
        </div>
    </section>

    <!-- Find Collaborators Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-8">Find Your Perfect Team</h2>
            <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto">Connect with talented individuals and build your dream team. Post your collaboration needs or browse existing opportunities.</p>
            <a href="/collaborate" class="inline-block bg-indigo-600 text-white px-8 py-3 rounded-md font-semibold hover:bg-indigo-700 transition duration-300">Visit Collaboration Board</a>
        </div>
    </section>

    <!-- Trending Startups Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Trending Startups</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Discover the most exciting and innovative startups making waves in the ecosystem.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($trendingStartups as $startup)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                        <div class="p-6">
                            <div class="flex items-center justify-center mb-6">
                                <img src="{{ $startup->logo }}" alt="{{ $startup->name }}" class="h-20 w-20 object-contain">
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $startup->name }}</h3>
                            <div class="flex items-center mb-4">
                                <span class="inline-block bg-indigo-100 text-indigo-800 text-sm font-semibold px-3 py-1 rounded-full">
                                    {{ $startup->category->name }}
                                </span>
                                @if($startup->funding_stage)
                                    <span class="inline-block bg-green-100 text-green-800 text-sm font-semibold px-3 py-1 rounded-full ml-2">
                                        {{ $startup->funding_stage }}
                                    </span>
                                @endif
                            </div>
                            <p class="text-gray-600 mb-4">{{ $startup->pitch }}</p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center text-gray-500 text-sm">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                    </svg>
                                    {{ $startup->views }} views
                                </div>
                                <a href="/startups/{{ $startup->id }}" class="text-indigo-600 hover:text-indigo-700 font-semibold">View Profile →</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-12">
                <a href="/browse" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                    Browse All Startups
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16 bg-indigo-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Success Stories</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Hear from founders and investors who have found success through our platform.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($testimonials as $testimonial)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                        <div class="p-8">
                            <div class="flex items-center mb-6">
                                <div class="flex-shrink-0">
                                    <img src="{{ $testimonial->photo }}" alt="{{ $testimonial->name }}" class="h-16 w-16 rounded-full object-cover">
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold text-gray-900">{{ $testimonial->name }}</h3>
                                    <p class="text-indigo-600">{{ $testimonial->role }}</p>
                                </div>
                            </div>
                            <blockquote class="relative">
                                <svg class="absolute -top-4 -left-4 h-8 w-8 text-indigo-100" fill="currentColor" viewBox="0 0 32 32">
                                    <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z"/>
                                </svg>
                                <p class="text-gray-600 italic pl-4">{{ $testimonial->quote }}</p>
                            </blockquote>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Startup Resources Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Startup Resources</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Latest insights, guides, and resources to help you grow your startup.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($latestPosts as $post)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                        <img src="{{ $post->image }}" alt="{{ $post->title }}" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $post->title }}</h3>
                            <p class="text-gray-600 mb-4">{{ $post->excerpt }}</p>
                            <a href="#" class="text-indigo-600 hover:text-indigo-700 font-semibold">Read More →</a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-12">
                <a href="#" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                    Visit Resources
                </a>
            </div>
        </div>
    </section>

    <!-- Why Use StartupHub Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-12">Why Use StartupHub</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="bg-indigo-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Verified Profiles</h3>
                    <p class="text-gray-600">All profiles are verified to ensure authenticity and trust.</p>
                </div>
                <div class="text-center">
                    <div class="bg-indigo-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Secure Messaging</h3>
                    <p class="text-gray-600">End-to-end encrypted communication for your privacy.</p>
                </div>
                <div class="text-center">
                    <div class="bg-indigo-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Transparent Metrics</h3>
                    <p class="text-gray-600">Real-time data and analytics for informed decisions.</p>
                </div>
                <div class="text-center">
                    <div class="bg-indigo-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Active Community</h3>
                    <p class="text-gray-600">Join a thriving network of innovators and entrepreneurs.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Email Sign-Up CTA Section -->
    <section class="py-16 bg-indigo-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-8">Ready to Join the Innovation Revolution?</h2>
            <p class="text-xl mb-8 max-w-3xl mx-auto">Sign up now to connect with startups, investors, and collaborators.</p>
            <form class="max-w-md mx-auto">
                <div class="flex flex-col sm:flex-row gap-4">
                    <input type="email" placeholder="Enter your email" class="flex-1 px-4 py-3 rounded-md text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <button type="submit" class="bg-white text-indigo-600 px-6 py-3 rounded-md font-semibold hover:bg-indigo-50 transition duration-300">Get Started Free</button>
                </div>
            </form>
        </div>
    </section>
@endsection 