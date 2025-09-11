<!DOCTYPE html>
<html>
<head>
    <title>Add Book</title>
</head>
<body>
    <a href="{{ route('books.index') }}">List Of Books</a>
    <h2>Add New Book</h2>

    <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Book Title</label>
        <input type="text" name="title"><br><br>

        <label>Book Author</label>
        <input type="text" name="author"><br><br>

        <label>Publisher</label>
        <input type="text" name="publisher"><br><br>

        <label>How much Books Published</label>
        <input type="number" name="no_of_books"><br><br>

        <label>Book Price</label>
        <input type="number" name="price_of_book"><br><br>

        <label>Author Picture</label>
        <input type="file" name="pic_of_author"><br><br>

        <button type="submit">Add New Book</button>
    </form>
</body>
</html>
