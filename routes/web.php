<?php

use App\Models\Student;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

// Step 9: Display Create Student Form
Route::get("/student/create", function () {
    return view("student.create");
});

// Step 9: Store Student Information
Route::post("/student", function (Request $request) {

    $student_data = $request->only([
        'name',
        'email',
        'phone',
        'address',
        'date_of_birth',
    ]);

    $student = Student::create($student_data);

    return "Student {$student->name} created successfully!";

});