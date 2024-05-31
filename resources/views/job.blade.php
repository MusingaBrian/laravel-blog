@extends('layout.layout')
@section('title', 'Job')
@section('header')
    <x-layout.navbar></x-layout>
@endsection

@section('content')
    <div class="p-10">
        <div class="overflow-x-auto">
            <table class="table">
            <!-- head -->
            <thead>
                <tr>
                <th>Link Page</th>
                <th>Job Title</th>
                <th>Salary</th>
                </tr>
            </thead>
            <tbody>
                <tr class="hover cursor-pointer">
                    <td><strong><a class="link primary" href="/jobs/">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4">
                            <path fill-rule="evenodd" d="M8.914 6.025a.75.75 0 0 1 1.06 0 3.5 3.5 0 0 1 0 4.95l-2 2a3.5 3.5 0 0 1-5.396-4.402.75.75 0 0 1 1.251.827 2 2 0 0 0 3.085 2.514l2-2a2 2 0 0 0 0-2.828.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                            <path fill-rule="evenodd" d="M7.086 9.975a.75.75 0 0 1-1.06 0 3.5 3.5 0 0 1 0-4.95l2-2a3.5 3.5 0 0 1 5.396 4.402.75.75 0 0 1-1.251-.827 2 2 0 0 0-3.085-2.514l-2 2a2 2 0 0 0 0 2.828.75.75 0 0 1 0 1.06Z" clip-rule="evenodd" />
                        </svg>                                          
                    </a></td>
                    <td><strong>{{ $job['title'] }}</strong></td>
                    <td>{{ $job['salary'] }} per year.</td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
@endsection
