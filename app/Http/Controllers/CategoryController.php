<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Startup;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($id)
    {
        $category = Category::findOrFail($id);
        $startups = Startup::where('category_id', $id)
            ->orderBy('trending_score', 'desc')
            ->paginate(12);

        return view('categories.show', compact('category', 'startups'));
    }
} 