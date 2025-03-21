<?php
$pdo = new PDO("mysql:host=localhost;dbname=kajer_hat", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Secure prepared statement
$stmt = $pdo->prepare("SELECT * FROM admins WHERE username = :username AND password = :password");

// Bind user input safely
$stmt->bindParam(':username', $_GET['username']);
$stmt->bindParam(':password', $_GET['password']);

$stmt->execute();

// Check if a user exists
if ($stmt->rowCount() > 0) {
    $user = $stmt->fetch(PDO::FETCH_ASSOC); // Fetch user data
    echo "Login successful!<br>";
    echo "Your email: " . $user['email']; // Display email
} else {
    echo "Invalid credentials!";
}
?>
