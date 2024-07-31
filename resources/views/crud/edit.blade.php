<!DOCTYPE html>
<html>
<head>
    <title>Laravel CRUD</title>
</head>
<body>
    <h2>Edit Entry</h2>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('crud.update', $singale_entry->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>First Name</label>
        <input type="text" name="first_name" value="{{ $singale_entry->first_name }}">
        <label>Last Name</label>
        <input type="text" name="last_name" value="{{ $singale_entry->last_name }}">
        <button type="submit">Submit</button>
    </form>
</body>
</html>