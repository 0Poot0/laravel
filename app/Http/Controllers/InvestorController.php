<?php

namespace App\Http\Controllers;

use App\Models\Investor;
use Illuminate\Http\Request;

class InvestorController extends Controller
{
    public function index()
    {
        $investors = Investor::paginate(12);
        return view('investors.index', compact('investors'));
    }

    public function show($id)
    {
        $investor = Investor::findOrFail($id);
        return view('investors.show', compact('investor'));
    }
} 