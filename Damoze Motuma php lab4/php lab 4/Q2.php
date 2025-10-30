<?php
/*
Name: Damoze    Motuma
Course Code: SEng 3053
*/
?>
<form method="post">
    Length: <input type="number" name="length">
    <button type="submit">Generate</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $length = $_POST["length"];
    $characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*?";
    $shuffled = str_shuffle($characters);
    echo substr($shuffled, 0, $length);
}
?>