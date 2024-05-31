<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '900,000',
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => '500,000',
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => '350,000',
            ],
        ],

    ]);
})->name('jobs');

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Director',
            'salary' => '900,000',
        ],
        [
            'id' => 2,
            'title' => 'Programmer',
            'salary' => '500,000',
        ],
        [
            'id' => 3,
            'title' => 'Teacher',
            'salary' => '350,000',
        ],
    ];

    $job = Arr::first($jobs, fn ($job) => $job['id'] == $id);

    return view('job', ['job' => $job]);
})->name('job');

Route::get('contact', function () {
    return view('contact');
})->name('contact');
