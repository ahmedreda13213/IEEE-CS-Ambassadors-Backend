<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Arr;
use App\Models\job;




Route::get('/', function () {
    return view('home' );
});

Route::get('/job', function () {
    $jobs = Job::with(relations: 'employer')->cursorPaginate(3);
    return view('jobs',[
        'jobs' =>  $jobs ]);
});

Route::get('/jobs/{id}', function ($id) {
          $job = Job::find( $id );
          
            

    return view('job' , ['job' => $job ]);
});
Route::get('/contact', function () {
    return view('contact');
});