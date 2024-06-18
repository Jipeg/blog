<?php

use Illuminate\Support\Facades\Route;
use App\Models\Jobs;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs', function () {
    $jobs = Jobs::all();
    return view('jobs', ['jobs' => $jobs]);
});

Route::get('/jobs/{id}', function ($id) {
    $job = Jobs::find($id);
    return view('job', ['job' => $job]);
});