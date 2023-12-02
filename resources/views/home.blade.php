<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD System</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f7f7f7;
        }

        header {
            background-color: #00008B;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        h2{
            font-size: 10px
        }

        main {
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin: 50px;
        }

        section {
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        section a {
            display: block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #00008B;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        section a:hover {
            background-color: #555;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>CRUD SYSTEM</h1>
        <h2>Villareal Alexander</h2>
    </header>

    <main>
        <section>
            <h3>Manage Products</h3>
            <p>Click below to manage your products.</p>
            <a href="{{ route('products.index') }}">Manage Products</a>
        </section>

        <section>
            <h3>Manage Categories</h3>
            <p>Click below to manage your categories.</p>
            <a href="{{ route('categories.index') }}">Manage Categories</a>
        </section>
    </main>
</body>
</html>
