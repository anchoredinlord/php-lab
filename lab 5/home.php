<?php
session_start();

if(!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}
$username = $_SESSION['username'];

if(isset($_POST['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
</head>
<body>
    <h2>Home Page</h2>
    <img src="profile.png" alt="Profile Picture" width="150"><br><br>
    <p>Username: <strong><?php echo htmlspecialchars($username); ?></strong></p>
    <p>Welcome back, <?php echo htmlspecialchars($username); ?>!</p>

    <form method="POST" action="">
        <input type="submit" name="logout" value="Logout">
    </form>
</body>
</html>
