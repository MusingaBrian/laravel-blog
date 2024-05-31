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
                <th>Job Title</th>
                <th>Salary</th>
                </tr>
            </thead>
            <tbody>
                <tr class="hover cursor-pointer">
                    <td><strong>{{ $job['title'] }}</strong></td>
                    <td>{{ $job['salary'] }} per year.</td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
@endsection
