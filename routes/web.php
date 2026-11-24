
<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Student resource routes
Route::resource('students', StudentController::class);

// Course resource routes
Route::resource('courses', CourseController::class);
