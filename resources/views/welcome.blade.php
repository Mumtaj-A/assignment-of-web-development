<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Book Manager</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .container {
            margin-top: 100px;
        }
        h1 {
            color: #333;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            text-decoration: none;
            background: #007bff;
            color: white;
            border-radius: 5px;
        }
        a:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📚 Welcome to Book Management System</h1>
        <p>Manage your books easily with Add, Read, Update, and Delete options.</p>

        <!-- 🔗 Link to Books Page -->
        <a href="{{ route('books.index') }}">Go to Books</a>
    </div>
</body>
</html>
