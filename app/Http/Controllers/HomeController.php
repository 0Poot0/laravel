<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Investor;
use App\Models\Startup;
use App\Models\Testimonial;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $featuredInvestors = Investor::where('is_featured', true)->take(4)->get();
        $trendingStartups = Startup::orderBy('views', 'desc')->take(3)->get();
        $testimonials = Testimonial::all();
        $latestPosts = Post::latest()->take(3)->get();

        return view('home', compact(
            'categories',
            'featuredInvestors',
            'trendingStartups',
            'testimonials',
            'latestPosts'
        ));
    }
} 