<!DOCTYPE html>
<html>
<head>
    <title>Books List</title>
</head>
<body>
    <a href="{{ route('books.create') }}">Add New Book</a>

    @if(session('success'))
        <p style="background: green; color: white;">{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="10">
        <tr>
            <th>Book Name</th>
            <th>Publications</th>
            <th>Author</th>
            <th>Author's Image</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach($books as $book)
        <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->publisher }}</td>
            <td>{{ $book->author }}</td>
            <td>
                @if($book->pic_of_author)
                    <img src="{{ asset('uploads/'.$book->pic_of_author) }}" width="80">
                @else
                    No Image
                @endif
            </td>
            <td><a href="{{ route('books.edit',$book->id) }}">Edit</a></td>
            <td>
                <form action="{{ route('books.destroy',$book->id) }}" method="POST">
                    @csrf @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
