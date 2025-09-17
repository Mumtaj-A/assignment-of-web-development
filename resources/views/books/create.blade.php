<!DOCTYPE html>
<html>
<head>
    <title>Add Book</title>
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
    <h2>Add New Book</h2>

    <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <table>
            <tr>
                <td>Book Title</td>
                <td><input type="text" name="title" required></td>
            </tr>
            <tr>
                <td>Book Author</td>
                <td><input type="text" name="author" required></td>
            </tr>
            <tr>
                <td>Publisher</td>
                <td><input type="text" name="publisher"></td>
            </tr>
            <tr>
                <td>How many Books Published</td>
                <td><input type="number" name="no_of_books" min="1"></td>
            </tr>
            <tr>
                <td>Book Price</td>
                <td><input type="number" name="price_of_book" step="0.01"></td>
            </tr>
            <tr>
                <td>Author Picture</td>
                <td><input type="file" name="pic_of_author" accept="image/*"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;">
                    <button type="submit">➕ Add New Book</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
