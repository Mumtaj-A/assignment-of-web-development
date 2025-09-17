<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Book Manager</title>
    <style>
        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background: linear-gradient(135deg, #f0f4f8, #d9e4ec);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.15);
            max-width: 500px;
            width: 90%;
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }

        h1 {
            color: #2c3e50;
            margin-bottom: 15px;
        }

        p {
            color: #555;
            margin-bottom: 25px;
        }

        a {
            display: inline-block;
            padding: 12px 25px;
            text-decoration: none;
            background: #007bff;
            color: white;
            font-weight: bold;
            border-radius: 6px;
            transition: 0.3s;
        }

        a:hover {
            background: #0056b3;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📚 Welcome to Book Management System</h1>
        <p>Manage your books with ease — Add, View, Update, and Delete in one place.</p>

        <!-- 🔗 Link to Books Page -->
        <a href="{{ route('books.index') }}">🚀 Go to Books</a>
    </div>
</body>
</html>
