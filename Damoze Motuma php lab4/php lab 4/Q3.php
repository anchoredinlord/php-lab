<?php
/*
Name: Damoze    Motuma
Course Code: SEng 3053
*/
?>
<form method="post">
    Email: <input type="email" name="email">
    <button type="submit">Mask</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $pos = strpos($email, "@");
    echo substr($email, 0, 3) . "***" . substr($email, $pos);
}
?>