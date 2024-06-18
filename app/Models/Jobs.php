<?php

namespace App\Models;

class Jobs {
    public static function all() : array {
        return
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
    }

    public static function find(int $id) : array {
        $job = \Illuminate\Support\Arr::first(static::all(), fn($job) => $job['id'] == $id);
        if (!$job) abort('404');
        return $job;
    }
}