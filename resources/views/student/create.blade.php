
<!DOCTYPE html>
<html>
<head>
    <title>Create Student</title>
</head>
<body>

    <h1>Create Student</h1>

    <!-- Display Validation Error Messages -->
    @if($errors->any())

        <h3>Please fix the following errors:</h3>

        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    @endif

    <!-- Student Create Form -->
    <form action="{{ route('students.store') }}" method="POST">

        @csrf

        <label for="name">Name</label>
        <input type="text" id="name" name="name"
            value="{{ old('name') }}">

        <br><br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email"
            value="{{ old('email') }}">

        <br><br>

        <label for="phone">Phone</label>
        <input type="text" id="phone" name="phone"
            value="{{ old('phone') }}">

        <br><br>

        <label for="address">Address</label>
        <textarea id="address" name="address">{{ old('address') }}</textarea>

        <br><br>

        <label for="date_of_birth">Date of Birth</label>
        <input type="date" id="date_of_birth" name="date_of_birth"
            value="{{ old('date_of_birth') }}">

        <br><br>

        <button type="submit">Create Student</button>

    </form>

    <br>

    <!-- Back to Student List -->
    <a href="{{ route('students.index') }}">Back to Students</a>

</body>
</html>
