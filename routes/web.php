<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

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
    $jobs = Job::all();
    return view('jobs', ['jobs' => $jobs]);
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    return view('job', ['job' => $job]);
});

Route::get('/articles', function () {
    $articles = Article::all();
    return view('articles', ['articles' => $articles]);
});

Route::get('/articles/{id}', function ($id) {
    $article = Article::find($id);
    return view('article', ['article' => $article]);
});