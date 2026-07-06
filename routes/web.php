<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\frontEndController;










Route::get('/', [frontEndController::class, 'home'])->name('home');

Route::get('/about', [frontEndController::class, 'about'])->name('about');
Route::get('/properties', [frontEndController::class, 'properties'])->name('properties');
Route::get('/agents', [frontEndController::class, 'agents'])->name('agents');
Route::get('/blog', [frontEndController::class, 'blog'])->name('blog');
Route::get('/contact', [frontEndController::class, 'contact'])->name('contact');
Route::get('/property-detailed', [frontEndController::class, 'property_detailed'])->name('property_detailed');
Route::get('/agent-detailed', [frontEndController::class, 'agent_detailed'])->name('agent_detailed');

