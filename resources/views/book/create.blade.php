<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Book</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }
        h1 {
            color: #333;
        }
        label {
            font-weight: bold;
            display: block;
            margin: 10px 0 5px;
            text-align: left;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }
        textarea {
            resize: none;
            height: 100px;
        }
        button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            width: 100%;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
        }
        button:hover {
            background-color: #218838;
        }
        .success-message {
            color: green;
            margin-bottom: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Add New Book</h1>


        <form action="{{ route('store') }}" method="post">
            @csrf 
            
            <label for="name">Name of Book:</label>
            <input type="text" id="name" name="name" required>
        
            <label for="descraption">Description:</label>
            <textarea id="descraption" name="descraption" required></textarea>

            <label for="price">Price:</label>
            <input type="number" id="price" name="price" required>

            <button type="submit">Save</button>
        </form>
    </div>

</body>
</html>
