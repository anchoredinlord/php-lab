<?php
/*
Name: Damoze    Motuma
Course Code: SEng 3053
*/
?>
<form method="post">
    Enter a number: <input type="number" name="number">
    <button type="submit">Check</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["number"];

    if ($num > 0) echo "Positive";
    elseif ($num < 0) echo "Negative";
    else echo "Zero";
}
?>