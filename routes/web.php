<?php

use Illuminate\Support\Facades\Route;

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
    $jobs = 
        [
            [
                'id' => 1,
                'title' => 'Programmer',
                'salary' => '$10000',
                'skills' => 'Html, CSS, JS, PHP',
                'link' => 'php.net'
            ],
            [
                'id' => 2,
                'title' => 'Teacher',
                'salary' => '$8000',
                'skills' => 'Math, Language, Literature',
                'link' => 'google.com'
            ],
            [
                'id' => 3,
                'title' => 'Director',
                'salary' => '$15000',
                'skills' => 'Clever, Accurate, Strong',
                'link' => 'ya.ru'
            ]
        ];
    return view('jobs', ['jobs' => $jobs]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = 
    [
        [
            'id' => 1,
            'title' => 'Programmer',
            'salary' => '$10000',
            'skills' => 'Html, CSS, JS, PHP',
            'link' => 'php.net'
        ],
        [
            'id' => 2,
            'title' => 'Teacher',
            'salary' => '$8000',
            'skills' => 'Math, Language, Literature',
            'link' => 'google.com'
        ],
        [
            'id' => 3,
            'title' => 'Director',
            'salary' => '$15000',
            'skills' => 'Clever, Accurate, Strong',
            'link' => 'ya.ru'
        ]
    ];
    $job = \Illuminate\Support\Arr::first($jobs, fn($job) => $job['id'] == $id);
    // dd($job);
    return view('job', ['job' => $job]);
});