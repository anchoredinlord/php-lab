<?php
/*
Name: Damoze    Motuma
Course Code: SEng 3053
*/
?>
<form method="post">
    Enter numbers separated by comma: <input type="text" name="numbers">
    <button type="submit">Filter</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $arr = explode(",", $_POST["numbers"]);
    $sum = 0;

    foreach ($arr as $value) $sum += $value;
    $average = $sum / count($arr);

    $filtered = [];
    foreach ($arr as $value) {
        if ($value > $average) $filtered[] = $value;
    }

    echo "Above average: ";
    print_r($filtered);
}
?>