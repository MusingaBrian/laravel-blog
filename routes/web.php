<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    $jobs = Job::all();

    dd($jobs);

    return view('home');
})->name('home');

Route::get('jobs', function () {
    return view('jobs', [
        'jobs' => Job::all(),

    ]);
})->name('jobs');

Route::get('/jobs/{id}', function ($id) {

    $job = Job::find($id);
    return view('job', ['job' => $job]);
})->name('job');

Route::get('contact', function () {
    return view('contact');
})->name('contact');
