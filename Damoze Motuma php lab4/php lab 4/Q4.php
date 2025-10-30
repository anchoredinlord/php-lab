<?php
/*
Name: Damoze    Motuma
Course Code: SEng 3053
*/
?>
<form method="post">
    <input type="number" name="a" placeholder="Number 1">
    <input type="number" name="b" placeholder="Number 2">
    <input type="number" name="c" placeholder="Number 3">
    <button type="submit">Find Largest</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];

    if ($a > $b && $a > $c) echo "Largest: $a";
    elseif ($b > $a && $b > $c) echo "Largest: $b";
    else echo "Largest: $c";
}
?>