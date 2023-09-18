<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $validUsername = "your_username";
    $validPassword = "your_password";

    $inputUsername = $_POST["username"];
    $inputPassword = $_POST["password"];

    if ($inputUsername === $validUsername && $inputPassword === $validPassword) {
        // Authentication successful
        session_start();
        $_SESSION["username"] = $inputUsername;
        header("Location: "); // Redirect to the welcome page
        exit();
    } else {
        // Authentication failed
        echo "Invalid username or password. Please try again.";
    }
}
?>
</head>
<body>
    <h2>Login</h2>
    <form action="index.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Login">
    </form>
</body>
</html>




