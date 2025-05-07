<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Login - Capstonne</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="icon" type="image/x-icon" href="images/logo.ico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
    body {
        font-family: "Open Sans";
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .login-container {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        padding: 30px;
        max-width: 400px;
        width: 100%;
    }

    h1 {
        font-size: 24px;
        color: #333;
        margin-bottom: 20px;
        text-align: center;
    }

    form {
        display: grid;
        gap: 15px;
    }

    label {
        font-weight: bold;
        color: #333;
    }

    input[type="email"], input[type="password"] {
        padding: 15px 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }

    button {
        background-color: #3498db;
        color: #fff;
        padding: 15px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #2980b9;
    }

    .signup-link {
        color: #666;
        margin-top: 20px;
    }

    .signup-link a {
        color: #3498db;
        text-decoration: none;
    }

    .signup-link a:hover {
        text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h1>Login to Capstonne</h1>
    <form action="login.php" method="post">
      <label for="username">Username:</label>
      <input type="email" id="username" name="username" placeholder="Your username.." required>
      
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="Your password.." required>
      
      <button type="submit">Login</button>
    </form>
        <p class="signup-link">Don't have an account? <a href="#">Sign up</a></p>
  </div>
</body>
</html>

<?php
session_start();

// Simulate user credentials (replace with your database logic)
$validUsername = "capstonne.development@gmail.com";
$validPassword = "capstonne.development@1234";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enteredUsername = $_POST["username"];
    $enteredPassword = $_POST["password"];

    if ($enteredUsername === $validUsername && $enteredPassword === $validPassword) {
        $_SESSION["username"] = $enteredUsername;
        header("Location: super/admin.php");
    } else {
        echo "<script>alert('Invalid credentials. Please try again.');</script>";
    }
}
?>
