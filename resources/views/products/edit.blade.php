<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
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

        .form-container {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input, textarea, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
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
            background-color: #87CEEB;
        }

        .btn-danger {
            margin-top: 10px;
            background-color: #dc3545;
        }
    </style>
</head>
<body>
    <header>
        <h1>Edit Product</h1>
    </header>

    <main>
        <div class="form-container">
            <form method="post" action="{{ route('products.update', $product->id) }}">
                @csrf
                @method('PUT')

                <label for="name">Product Name:</label>
                <input type="text" name="name" value="{{ $product->name }}" required>

                <label for="description">Description:</label>
                <textarea name="description" required>{{ $product->description }}</textarea>

                <label for="price">Price:</label>
                <input type="number" name="price" value="{{ $product->price }}" required>

                <label for="category_id">Category:</label>
                <select name="category_id" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>

                <button type="submit" class="btn btn-warning">Update Product</button>
            </form>
        </div>

        <a href="{{ route('products.index') }}" class="btn btn-danger">Cancel Edit</a>
    </main>
</body>
</html>
