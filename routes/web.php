<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'title' => 'Director',
                'salary' => '900,000',
            ],
            [
                'title' => 'Programmer',
                'salary' => '500,000',
            ],
            [
                'title' => 'Teacher',
                'salary' => '350,000',
            ],
        ],

    ]);
})->name('jobs');

// Route::get('/jobs/{id}', function ($id) {
//     dd($id);
//     return view('contact');
// });
Route::get('contact', function () {
    return view('contact');
})->name('contact');
