<!DOCTYPE html>
<html>
    <head>
        <title>Laravel CRUD</title>
    </head>
    <style>
        table {
            border: solid 1px #000;
        }
        table tr th, table tr td {
            border: solid 1px #000;
            padding: 3px 5px;
        }
    </style>
<body>
    <h2>Entries</h2>
    <table>
        <thead>
            <tr>
                <th colspan="4" style="text-align: end;">
                    <a href="{{ route('crud.create') }}">Create New Entry</a>
                    <a href="{{ route('crud.create') }}">All Entries remove</a>
                </th>
            </tr>
            @if ($message = Session::get('success'))
                <tr>
                    <th colspan="4" style="text-align: center;">{{ $message }}</th>
                </tr>
            @endif
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($all_entries as $entries)
                <tr>
                    <td>{{ $entries->id }}</td>
                    <td>{{ $entries->first_name }}</td>
                    <td>{{ $entries->last_name }}</td>
                    <td>
                        <a href="{{ route('crud.show', $entries->id) }}">Show</a>
                        <a href="{{ route('crud.edit', $entries->id) }}">Edit</a>
                        <form action="{{ route('crud.destroy', $entries->id) }}" method="GET" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>