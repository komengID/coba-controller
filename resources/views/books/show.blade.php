<!DOCTYPE html>
<html>
<head>
    <title>Book Details</title>
    <!-- Tambahkan stylesheet atau CSS yang diperlukan -->
</head>
<body>
    <h1>Book Details</h1>

    <h2>Title: {{ $book->title }}</h2>
    <p>Author: {{ $book->author }}</p>
    <p>Description: {{ $book->description }}</p>

    <a href="{{ route('books.index') }}">Back to Book List</a>

    <!-- Tambahkan script atau JavaScript yang diperlukan -->
</body>
</html>
