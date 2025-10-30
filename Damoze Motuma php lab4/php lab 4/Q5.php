<?php
/*
Name: Damoze    Motuma
Course Code: SEng 3053
*/
?>
<form method="post">
    Enter numbers separated by comma: <input type="text" name="numbers">
    <button type="submit">Sum</button>
</form>

<?php
function sumArray($arr) {
    $sum = 0;
    foreach ($arr as $value) $sum += $value;
    return $sum;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $arr = explode(",", $_POST["numbers"]);
    echo "Sum = " . sumArray($arr);
}
?>