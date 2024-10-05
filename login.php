<?php
session_start();
include('config/db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $query = "SELECT * FROM users WHERE user_email = '$email' AND user_password = '$password'";
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['loggedin'] = true;
        header('Location: index.php');
    } else {
        echo "Invalid login credentials.";
    }
}
?>

<form method="POST">
    <label>Email:</label><input type="email" name="email" required><br>
    <label>Password:</label><input type="password" name="password" required><br>
    <button type="submit">Login</button>
</form>
