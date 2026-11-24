<!DOCTYPE html>
<html>
<head>
    <title>Create Student</title>
</head>
<body>

    <h1>Create Student</h1>

    <form action="{{ url('/students') }}" method="POST">

        @csrf

        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}">

        <br><br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}">

        <br><br>

        <label for="phone">Phone</label>
        <input type="text" id="phone" name="phone" value="{{ old('phone') }}">

        <br><br>

        <label for="address">Address</label>
        <textarea id="address" name="address">{{ old('address') }}</textarea>

        <br><br>

        <label for="date_of_birth">Date of Birth</label>
        <input type="date" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}">

        <br><br>

        <button type="submit">Create Student</button>

    </form>

    <br>

    <a href="{{ url('/students') }}">Back to Students</a>

</body>
</html>