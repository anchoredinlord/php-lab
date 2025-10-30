<?php
/*
Name: Damoze    Motuma
Course Code: SEng 3053
*/
?>
<form method="post">
    Enter numbers separated by comma: <input type="text" name="numbers">
    <button type="submit">Process</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $arr = explode(",", $_POST["numbers"]);
    $arr = array_unique($arr);
    sort($arr);
    echo "Sorted: ";
    print_r($arr);
    echo "<br>Total Count: " . count($arr);
}
?>