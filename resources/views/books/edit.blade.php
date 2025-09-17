<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            margin: 20px;
            color: #333;
        }

        a {
            display: inline-block;
            margin-bottom: 15px;
            padding: 8px 14px;
            background: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: 0.3s;
        }

        a:hover {
            background: #2980b9;
        }

        h2 {
            color: #2c3e50;
        }

        table {
            width: 60%;
            max-width: 600px;
            background: white;
            border-collapse: collapse;
            margin-bottom: 20px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        table td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }

        table td:first-child {
            width: 40%;
            font-weight: bold;
            background: #ecf0f1;
        }

        input, button {
            padding: 8px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="file"] {
            border: none;
        }

        img {
            margin-top: 8px;
            border-radius: 6px;
            box-shadow: 0 1px 4px rgba(0,0,0,0.2);
        }

        button {
            background: #27ae60;
            color: white;
            font-weight: bold;
            border: none;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #219150;
        }
    </style>
</head>
<body>
    <a href="{{ route('books.index') }}">📚 List Of Books</a>
    <h2>Edit Book</h2>

    <form action="{{ route('books.update',$book->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')

        <table>
            <tr>
                <td>Book Title</td>
                <td><input type="text" name="title" value="{{ $book->title }}" required></td>
            </tr>
            <tr>
                <td>Book Author</td>
                <td><input type="text" name="author" value="{{ $book->author }}" required></td>
            </tr>
            <tr>
                <td>Publisher</td>
                <td><input type="text" name="publisher" value="{{ $book->publisher }}"></td>
            </tr>
            <tr>
                <td>How many Books Published</td>
                <td><input type="number" name="no_of_books" value="{{ $book->no_of_books }}" min="1"></td>
            </tr>
            <tr>
                <td>Book Price</td>
                <td><input type="number" name="price_of_book" value="{{ $book->price_of_book }}" step="0.01"></td>
            </tr>
            <tr>
                <td>Author Picture</td>
                <td>
                    <input type="file" name="pic_of_author" accept="image/*">
                    @if($book->pic_of_author)
                        <br>
                        <img src="{{ asset('uploads/'.$book->pic_of_author) }}" width="80">
                    @endif
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;">
                    <button type="submit">✅ Update Book</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
