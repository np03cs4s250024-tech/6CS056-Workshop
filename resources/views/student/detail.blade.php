
<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
</head>
<body>

    <h1>Student Details</h1>

    <!-- Display Student Information -->
    <p><strong>ID:</strong> {{ $student->id }}</p>

    <p><strong>Name:</strong> {{ $student->name }}</p>

    <p><strong>Email:</strong> {{ $student->email }}</p>

    <p><strong>Phone:</strong> {{ $student->phone }}</p>

    <p><strong>Address:</strong> {{ $student->address }}</p>

    <p><strong>Date of Birth:</strong> {{ $student->date_of_birth }}</p>

    <br>

    <!-- Edit Student -->
    <a href="{{ route('students.edit', $student->id) }}">
        Edit Student
    </a>

    <br><br>

    <!-- Back to Student List -->
    <a href="{{ route('students.index') }}">
        Back to Students
    </a>

</body>
</html>
