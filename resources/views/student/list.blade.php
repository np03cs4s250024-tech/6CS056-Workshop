
<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
</head>
<body>

    <h1>Students</h1>

    <!-- Display Success Message -->
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <!-- Create Student -->
    <a href="{{ route('students.create') }}">Create Student</a>

    <br><br>

    <table border="1" cellpadding="10">

        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>

            @forelse($students as $student)

                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>

                    <td>
                        <!-- View Student -->
                        <a href="{{ route('students.show', $student->id) }}">View</a>

                        <!-- Edit Student -->
                        <a href="{{ route('students.edit', $student->id) }}">Edit</a>

                        <!-- Delete Student -->
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">

                            @csrf
                            @method('DELETE')

                            <button type="submit">Delete</button>

                        </form>
                    </td>
                </tr>

            @empty

                <tr>
                    <td colspan="5">No students found.</td>
                </tr>

            @endforelse

        </tbody>

    </table>

</body>
</html>
