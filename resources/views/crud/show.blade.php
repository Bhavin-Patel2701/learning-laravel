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
    <table>
        <thead>
            <tr>
                <th colspan="4" style="text-align: end;">
                    <a href="{{ route('crud.index') }}" class="button">Back</a>
                </th>
            </tr>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $singale_entry->id }}</td>
                <td>{{ $singale_entry->first_name }}</td>
                <td>{{ $singale_entry->last_name }}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>