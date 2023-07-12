<!DOCTYPE html>
<html>
<head>
    <title>Book List</title>
    <!-- Tambahkan stylesheet atau CSS yang diperlukan -->
</head>
<body>
    <h1>Book List</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('books.create') }}">Add New Book</a>

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->description }}</td>
                    <td>
                        <a href="{{ route('books.show', $book->id) }}">View</a>
                        <a href="{{ route('books.edit', $book->id) }}">Edit</a>
                        <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Tambahkan script atau JavaScript yang diperlukan -->
</body>
</html>
