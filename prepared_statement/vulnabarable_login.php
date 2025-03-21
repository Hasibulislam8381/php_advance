<?php
$pdo = new PDO("mysql:host=localhost;dbname=kajer_hat", "root", "");

// Getting user input (simulating a login attempt)
$username = $_GET['username']; // User input from a form
$password = $_GET['password']; // User input from a form

// UNSAFE: Directly inserting user input into the SQL query
$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $pdo->query($query);

if ($result->rowCount() > 0) {
    echo "Login successful!";
} else {
    echo "Invalid credentials!";
}
?>
