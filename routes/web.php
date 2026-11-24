
<?php

use App\Models\Student;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

// Step 9: Display Create Student Form
Route::get('/student/create', function () {
    return view('student.create');
});

// Step 9 and Step 10: Store Student Information with Validation
Route::post('/student', function (Request $request) {

    // Validate the submitted student information
    
$validated = $request->validate([
    'name' => 'required|string|max:255',
    'email' => 'required|email|max:255|unique:students,email',
    'phone' => 'required|string|max:20',
    'address' => 'nullable|string|max:500',
    'date_of_birth' => 'nullable|date',
]);


    // Save the validated information into the database
    $student = Student::create($validated);

    // Display success message
    return "Student {$student->name} created successfully!";
});
