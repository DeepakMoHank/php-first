<!DOCTYPE html>
<html>
<head>
    <title>PHP Random Password Generator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background: #f4f4f4;
            padding-top: 50px;
        }
        form {
            background: white;
            display: inline-block;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px #aaa;
        }
        input, button {
            padding: 10px;
            margin: 5px;
            font-size: 16px;
        }
        button {
            background: #333;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background: #555;
        }
        .result {
            margin-top: 20px;
            font-size: 20px;
            font-weight: bold;
            background: #ddd;
            padding: 10px;
            border-radius: 5px;
            display: inline-block;
        }
    </style>
</head>
<body>

<h2>Random Password Generator</h2>

<form method="post">
    <label>Password Length:</label>
    <input type="number" name="length" min="4" max="50" value="12" required>
    <br>
    <button type="submit" name="generate">Generate</button>
</form>

<?php
if (isset($_POST['generate'])) {
    $length = (int) $_POST['length'];
    
    // Allowed characters
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    $password = '';
    
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[random_int(0, strlen($characters) - 1)];
    }
    
    echo "<div class='result'>Generated Password: $password</div>";
}
?>

</body>
</html>
