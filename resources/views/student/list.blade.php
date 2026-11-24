
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

    <a href="{{ url('/student/create') }}">Create Student</a>

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
                        <a href="{{ url('/student/' . $student->id) }}">View</a>

                        <a href="{{ url('/student/' . $student->id . '/edit') }}">Edit</a>

                        <form action="{{ url('/student/' . $student->id) }}" method="POST" style="display:inline;">

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
