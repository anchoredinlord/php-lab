<?php
/*
Name: Damoze    Motuma
Course Code: SEng 3053
*/
?>
<form method="post">
    Enter password: <input type="text" name="password">
    <button type="submit">Check</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST["password"];

    if (strlen($password) >= 8 && preg_match("/[A-Za-z]/", $password) && preg_match("/[0-9]/", $password))
        echo "Strong Password";
    else
        echo "Weak Password";
}
?>