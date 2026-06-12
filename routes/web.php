<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
Route::get('/', function () {
    return view('home');
});
$jobs=[
        [
            'id'=>1,
            'title'=>'Manager',
            'salary'=>'$50,000'
        ],
        [
            'id'=>2,
            'title'=>'Engineer',
            'salary'=>'$40,000'
        ],
        [
            'id'=>3,
            'title'=>'Technician',
            'salary'=>'$32,000'
        ]

        ];

Route::get('/jobs', function () use ($jobs) {
    return view('jobs',['jobs'=>$jobs]);
});

Route::get('/jobs/{id}', function($id) use ($jobs) {
    $job=Arr::first($jobs, function ($job) use ($id) {
        return $job['id']==$id;
    });
    return view('job',['job'=>$job]);
    
});


Route::get('/contact', function () {
    return view('contact');
});
