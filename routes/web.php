<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\InvestorController;
use App\Http\Controllers\StartupController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/browse', [StartupController::class, 'index'])->name('startups.index');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/investors', [InvestorController::class, 'index'])->name('investors.index');
Route::get('/investors/{id}', [InvestorController::class, 'show'])->name('investors.show');
Route::get('/startups/create', [StartupController::class, 'create'])->name('startups.create');
Route::post('/startups', [StartupController::class, 'store'])->name('startups.store');
Route::delete('/startups/{startup}', [StartupController::class, 'destroy'])->name('startups.destroy');

// Authentication Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
