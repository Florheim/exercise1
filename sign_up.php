<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <style>
        body {
            width: 500px;
            margin: 150px auto;
            padding: 20px;
            text-align: center;
            font-size: 24px;
            font-family: Arial, sans-serif;
        }
        button {
            padding: 10px 20px;
            font-size: 18px;
            background-color: #c30010;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #ff2c2c;
        }
    </style>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];
        echo "Welcome, " . htmlspecialchars($username) . "!";
    }
    ?>
    
    <p>Already have an account? <a href="login.html">Login here</a>.</p>
</body>
</html>
