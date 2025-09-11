<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
</head>
<body>
    <a href="{{ route('books.index') }}">List Of Books</a>
    <h2>Edit Book</h2>

    <form action="{{ route('books.update',$book->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')

        <label>Book Title</label>
        <input type="text" name="title" value="{{ $book->title }}"><br><br>

        <label>Book Author</label>
        <input type="text" name="author" value="{{ $book->author }}"><br><br>

        <label>Publisher</label>
        <input type="text" name="publisher" value="{{ $book->publisher }}"><br><br>

        <label>How much Books Published</label>
        <input type="number" name="no_of_books" value="{{ $book->no_of_books }}"><br><br>

        <label>Book Price</label>
        <input type="number" name="price_of_book" value="{{ $book->price_of_book }}"><br><br>

        <label>Author Picture</label>
        <input type="file" name="pic_of_author"><br>
        @if($book->pic_of_author)
            <img src="{{ asset('uploads/'.$book->pic_of_author) }}" width="80">
        @endif
        <br><br>

        <button type="submit">Update Book</button>
    </form>
</body>
</html>
