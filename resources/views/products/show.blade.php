<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Product</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #00008B;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        main {
            margin: 20px;
        }

        .product-details {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 5px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            background-color: #333;
            color: #fff;
            border-radius: 5px;
            margin-right: 10px;
        }

        .btn-warning {
            margin-top: 10px;
            background-color: #87CEEB;
        }

        .btn-danger {
            background-color: #dc3545;
        }
    </style>
</head>
<body>
    <header>
        <h1>Show Product</h1>
    </header>

    <main>
        <div class="product-details">
            <h2>{{ $product->name }}</h2>
            <p><strong>Description:</strong> {{ $product->description }}</p>
            <p><strong>Price:</strong> {{ $product->price }}</p>
            <p><strong>Category:</strong> {{ $product->category->name }}</p>
        </div>

        <a href="{{ route('products.index') }}" class="btn btn-warning">Back to Product List</a>
    </main>
</body>
</html>
