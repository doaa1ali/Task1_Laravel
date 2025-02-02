<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
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
        .success-container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 400px;
            animation: fadeIn 1s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.9); }
            to { opacity: 1; transform: scale(1); }
        }
        .success-icon {
            font-size: 50px;
            color: #28a745;
        }
        .success-message {
            font-size: 20px;
            color: #333;
            margin-top: 10px;
            font-weight: bold;
        }
        .back-button {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 15px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: 0.3s;
        }
        .back-button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

    <div class="success-container">
        <div class="success-icon">✅</div>
        <p class="success-message">Book Added Successfully!</p>
        <a href="{{ route('book.create') }}" class="back-button">Add Another Book</a>
    </div>

</body>
</html>
