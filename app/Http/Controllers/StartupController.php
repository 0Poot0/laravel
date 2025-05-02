<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Startup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StartupController extends Controller
{
    public function index(Request $request)
    {
        $query = Startup::query();

        // Filter by category if provided
        if ($request->has('category')) {
            $query->where('category_id', $request->category);
        }

        // Order by trending score by default
        $query->orderBy('trending_score', 'desc');

        $startups = $query->paginate(12);
        $categories = Category::all();

        return view('startups.index', compact('startups', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('startups.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'funding_stage' => 'required|string|in:Pre-seed,Seed,Series A,Series B,Series C+',
            'pitch' => 'required|string|max:500',
            'location' => 'required|string|max:255',
            'team_size' => 'required|integer|min:1',
            'founded_date' => 'required|date',
        ]);

        // Create the startup
        $startup = Startup::create($validated);

        return redirect()->route('startups.index')
            ->with('success', 'Your startup has been listed successfully!');
    }

    public function destroy(Startup $startup)
    {
        $startup->delete();
        return redirect()->route('startups.index')
            ->with('success', 'Startup deleted successfully!');
    }
} 