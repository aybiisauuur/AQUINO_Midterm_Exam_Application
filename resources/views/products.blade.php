<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
            padding: 20px;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background: white;
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
        }
        strong {
            color: #007BFF;
        }
    </style>
</head>
<body>
    <h1>Anime List</h1>
    <ul>
        @foreach ($products as $product)
            <li>
                <strong>{{ $product['title'] }}</strong> by {{ $product['author'] }} - {{ $product['genre'] }}
            </li>
        @endforeach
    </ul>
</body>
</html>
