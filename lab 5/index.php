<?php
 session_start();

$username = "";
$error = "";

// Check if cookie exists and pre-fill the username
if(isset($_COOKIE['username'])) {
    $username = $_COOKIE['username'];
}

// Check if form is submitted
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];
    $remember = isset($_POST['remember']);

    // Validate form fields
    if(empty($input_username) || empty($input_password)) {
        $error = "Please fill in both fields.";
    } else {
        // Fixed credentials
        $valid_username = "admin";
        $valid_password = "1234";

        if($input_username === $valid_username && $input_password === $valid_password) {
            // Create session
            $_SESSION['username'] = $input_username;

            // Set cookie if 'Remember Me' checked
            if($remember) {
                setcookie("username", $input_username, time() + 60); // expires in 1 minute
            }

            // Redirect to home.php
            header("Location: home.php");
            exit;
        } else {
            $error = "Invalid username or password!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
</head>
<body>
    <h2>Login</h2>
    <?php if($error) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="POST" action="">
        <label>Username:</label><br>
        <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>"><br><br>

        <label>Password:</label><br>
        <input type="password" name="password"><br><br>

        <input type="checkbox" name="remember" <?php if(isset($_COOKIE['username'])) echo "checked"; ?>> Remember Me<br><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>
*/
