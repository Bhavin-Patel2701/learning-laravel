<!DOCTYPE html>
<html>
<head>
    <title>Laravel CRUD</title>
</head>
<body>
    <h2>Create New Entry</h2>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('crud.store') }}" method="POST">
        @csrf
        <label>First Name</label>
        <input type="text" name="first_name" value="{{ old('first_name') }}">
        <label>Last Name</label>
        <input type="text" name="last_name" value="{{ old('last_name') }}">
        <button type="submit">Submit</button>
    </form>
</body>
</html>