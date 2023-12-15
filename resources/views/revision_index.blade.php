<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        .round-button {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 50%;
            background-color: cyan;
            color: black;
            text-decoration: none;
            text-align: center;
            font-size: 16px;
            cursor: pointer;
        }

        .round-button:hover {
            background-color: red;
        }
    </style>
</head>
<body>
    @if(Auth::check())
        <p>Welcome, {{ Auth::user()->name }}!</p>
        <a href='{{ route("customlogin.Logout") }}' class="round-button">Logout</a>
    @endif
    <br>

    <a href="{{ route('revisionform') }}" class="btn btn-secondary">Create</a>
    <br>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">S.N</th>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Gender</th>
                <th scope="col">Mobile</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($revisions as $revision)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $revision->id }}</td>
                    <td>{{ $revision->name }}</td>
                    <td>{{ $revision->age }}</td>
                    <td>{{ $revision->gender }}</td>
                    <td>{{ $revision->mobile }}</td>
                    <td>{{ $revision->status }}</td>
                    <td>
                        <a href="{{ route('revision.edit', $revision->id) }}" class='btn btn-primary'>Edit</a>
                        <a href="{{ route('revision.delete', $revision->id) }}" class='btn btn-danger'>Delete</a>
                    </td>
                </tr>
            @empty
                <tr><td colspan='9'> No records</td></tr>
            @endforelse
        </tbody>
    </table>
    {{ $revisions->links() }}
</body>
</html>
