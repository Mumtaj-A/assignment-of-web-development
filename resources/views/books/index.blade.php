<!DOCTYPE html>
<html>
<head>
    <title>Books List</title>
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

        p.success {
            background: #27ae60;
            color: white;
            padding: 10px;
            border-radius: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        table th, table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        table th {
            background: #3498db;
            color: white;
        }

        table tr:hover {
            background: #f1f1f1;
        }

        button {
            background: #e74c3c;
            color: white;
            border: none;
            padding: 6px 12px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #c0392b;
        }

        .no-data {
            padding: 15px;
            background: #ffeaa7;
            border: 1px solid #fdcb6e;
            border-radius: 5px;
            text-align: center;
            font-weight: bold;
            color: #2d3436;
        }
    </style>
</head>
<body>
    <a href="{{ route('books.create') }}">➕ Add New Book</a>

    @if(session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif

    @if($books->isNotEmpty())
        <table>
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
                        <img src="{{ asset('uploads/'.$book->pic_of_author) }}" width="70" style="border-radius:6px;">
                    @else
                        No Image
                    @endif
                </td>
                <td><a href="{{ route('books.edit',$book->id) }}" style="background:#2ecc71;">✏ Edit</a></td>
                <td>
                    <form action="{{ route('books.destroy',$book->id) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button type="submit">🗑 Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    @else
        <div class="no-data">📚 No books available.</div>
    @endif
</body>
</html>
