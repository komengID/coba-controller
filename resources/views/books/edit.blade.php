<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
    <!-- Tambahkan stylesheet atau CSS yang diperlukan -->
</head>
<body>
    <h1>Edit Book</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ old('title', $book->title) }}">
        </div>
        <div>
            <label for="author">Author:</label>
            <input type="text" id="author" name="author" value="{{ old('author', $book->author) }}">
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description">{{ old('description', $book->description) }}</textarea>
        </div>
        <div>
            <button type="submit">Update</button>
            <a href="{{ route('books.index') }}">Cancel</a>
        </div>
    </form>

    <!-- Tambahkan script atau JavaScript yang diperlukan -->
</body>
</html>
